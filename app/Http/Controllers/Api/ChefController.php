<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Http\Requests\UpdateChefRequest;
use App\Models\Chef;
use App\Models\Review;
use App\Models\Specialization;
use App\Models\Sponsorship;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    public function index()
    {
        //RITORNA UN JSON CON X COSE
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')->withCount('reviews')
            ->addSelect([
                'is_sponsored' => function ($query) {
                    $query->select(DB::raw('IF(COUNT(*) > 0, 1, 0)'))
                        ->from('chef_sponsorship')
                        ->whereColumn('chef_sponsorship.chef_id', 'chefs.id')
                        ->where('chef_sponsorship.start_date', '<=', now())
                        ->where('chef_sponsorship.end_date', '>=', now());
                }
            ])
            ->orderByDesc('is_sponsored')
            ->get();
        $chefs->each(function ($chef) {
            if ($chef->photograph) {
                $chef->photograph = asset('storage/' . $chef->photograph);
            }
            if ($chef->CV) {
                $chef->CV = asset('storage/' . $chef->CV);
            }
        });

        return response()->json(
            [
                "success" => true,
                "results" => $chefs
            ]
        );
    }

    public function show(Chef $chef)
    {
        $chef = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'messages', 'reviews')
            ->addSelect([
                'average_vote' => Vote::select(DB::raw('AVG(votes.vote)'))
                    ->join('chef_vote', 'votes.id', '=', 'chef_vote.vote_id')
                    ->whereColumn('chef_vote.chef_id', 'chefs.id')
            ])
            ->addSelect([
                'is_sponsored' => function ($query) {
                    $query->select(DB::raw('IF(COUNT(*) > 0, 1, 0)'))
                        ->from('chef_sponsorship')
                        ->whereColumn('chef_sponsorship.chef_id', 'chefs.id')
                        ->where('chef_sponsorship.start_date', '<=', now())
                        ->where('chef_sponsorship.end_date', '>=', now());
                }
            ])
            ->find($chef->id);
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]
        );
    }
    // public function store(StoreChefRequest $request){
    //     $email = session('user_email');
    //     $userId = User::where('email', $email)->firstOrFail()->id;
    //     $data = $request->validated();
    //     $data['user_id'] = $userId;
    //     if($request->hasFile('photograph')){
    //         $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
    //         $data["photograph"] = $img_path;
    //     }
    //     if($request->hasFile('CV')){
    //         $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
    //         $data["CV"] = $file_path;
    //     }
    //     $newChef = Chef::create($data);
    //     $newChef->specializations()->sync($data['specializations']);
    //     $newChef->loadMissing('user', 'specializations');
    //     return response()->json(
    //         [
    //             "success" => true,
    //             "results" => $newChef
    //         ]);
    // }
    //     public function update(UpdateChefRequest $request, Chef $chef){
    //         $data = $request->validated();

    //         // Se nella request hai il file 'photograph' manda avanti la modifica. Altrimenti non fare nulla.
    //         if($request->hasFile('photograph')){
    //             if ($chef->photograph) {
    //                 Storage::disk('public')->delete($chef->photograph);
    //             }
    //             $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
    //             $data["photograph"] = $img_path;
    //         }

    //         if($request->hasFile('CV')){
    //             if ($chef->CV) {
    //                 Storage::disk('public')->delete($chef->CV);
    //             }
    //             $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
    //             $data["CV"] = $file_path;
    //         }

    //          $chef->update($data);

    // //       Parentesi relazione. Senza parentesi chiamo il model
    //          $chef->specializations()->sync($data['specializations']);

    //     $chef->loadMissing('specializations');
    //     return response()->json(
    //         [
    //             "success" => true,
    //             "results" => $chef
    //         ]
    //     );
    // }


    public function SpecializationSearch(Request $request)
    {
        // Get the specialization IDs from the request data
        $specializationIds = $request->input('id', []);
        if (!is_array($specializationIds)) {
            $specializationIds = [$specializationIds];
        }
        $vote = $request->input('vote');
        $reviews = $request->input('reviews');

        // Start building the query
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')
            ->withCount('reviews')
            // Join the sponsorships table to order by sponsorships.id
            ->leftJoin('chef_sponsorship', 'chefs.id', '=', 'chef_sponsorship.chef_id')
            ->leftJoin('sponsorships', 'chef_sponsorship.sponsorship_id', '=', 'sponsorships.id')
            ->orderBy('sponsorships.id', 'desc');

        // Add a subquery to calculate the average vote
        $chefs = $chefs->addSelect([
            'average_vote' => Vote::select(DB::raw('AVG(votes.vote)'))
                ->join('chef_vote', 'votes.id', '=', 'chef_vote.vote_id')
                ->whereColumn('chef_vote.chef_id', 'chefs.id')
        ]);


        $chefs = $chefs->addSelect([
            'is_sponsored' => function ($query) {
                $query->select(DB::raw('COUNT(*) > 0'))
                    ->from('chef_sponsorship')
                    ->whereColumn('chef_sponsorship.chef_id', 'chefs.id')
                    ->where('chef_sponsorship.start_date', '<=', now())
                    ->where('chef_sponsorship.end_date', '>=', now());
            }
        ]);

        // Applica il filtro per le specializzazioni se presente

        if (!empty($specializationIds)) {
            $chefs = $chefs->whereHas('specializations', function ($query) use ($specializationIds) {
                $query->whereIn('specializations.id', $specializationIds);
            });
        }

        // Apply filter for average vote if present
        if (!empty($vote)) {
            $chefs = $chefs->having('average_vote', '>=', $vote);
        }

        // Apply filter for the number of reviews if present
        if (!empty($reviews)) {
            $chefs = $chefs->having('reviews_count', '>=', $reviews);
        }


        // Ordina i risultati mettendo prima i profili sponsorizzati
        $chefs = $chefs->orderByDesc('is_sponsored');

        // Esegui la query

        $chefs = $chefs->get();
        $chefs->each(function ($chef) {
            if ($chef->photograph) {
                $chef->photograph = asset('storage/' . $chef->photograph);
            }
            if ($chef->CV) {
                $chef->CV = asset('storage/' . $chef->CV);
            }
        });

        // Return the results in the JSON response
        return response()->json([
            'success' => true,
            'results' => $chefs
        ]);
    }


    public function searchSpecializationHome(Request $request)
    {
        $specializationIds = $request->input('id');
    }
}
