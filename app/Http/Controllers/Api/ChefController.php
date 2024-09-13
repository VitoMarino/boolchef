<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Http\Requests\UpdateChefRequest;
use App\Models\Chef;
use App\Models\Review;
use App\Models\Specialization;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    public function index()
    {
        //RITORNA UN JSON CON X COSE
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $chefs
            ]
        );
    }

    public function show(Chef $chef)
    {
        $chef->loadMissing('user', 'sponsorships', 'specializations', 'votes', 'messages', 'reviews');
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]
        );
    }

    public function store(StoreChefRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photograph')) {
            $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
            $data["photograph"] = $img_path;
        }
        if ($request->hasFile('CV')) {
            $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
            $data["CV"] = $file_path;
        }

        $data['user_id'] = Auth::id();
        $newChef = Chef::create($data);
        $newChef->specializations()->sync($data['specializations']);
        $newChef->loadMissing('user', 'specializations');
        return response()->json(
            [
                "success" => true,
                "results" => $newChef
            ]
        );
    }

    public function update(UpdateChefRequest $request, Chef $chef)
    {
        $data = $request->validated();

        // Se nella request hai il file 'photograph' manda avanti la modifica. Altrimenti non fare nulla.
        if ($request->hasFile('photograph')) {
            if ($chef->photograph) {
                Storage::disk('public')->delete($chef->photograph);
            }
            $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
            $data["photograph"] = $img_path;
        }

        if ($request->hasFile('CV')) {
            if ($chef->CV) {
                Storage::disk('public')->delete($chef->CV);
            }
            $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
            $data["CV"] = $file_path;
        }

        $chef->update($data);

        // Parentesi relazione. Senza parentesi chiamo il model
        $chef->specializations()->sync($data['specializations']);

        $chef->loadMissing('specializations');
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]
        );
    }

    public function SpecializationSearch(Request $request)
    {
        // Get the specialization IDs from the request data
        $specializationIds = $request->input('id'); // Expecting 'id' to be an array

        if (!empty($specializationIds)) {
            // Filter chefs by the given specialization IDs
            $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')
                ->whereHas('specializations', function ($query) use ($specializationIds) {
                    $query->whereIn('specializations.id', $specializationIds);
                })
                ->get();
        } else {
            // If no IDs provided, return all chefs (or you can choose to return an empty response)
            $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')
                ->get();
        }

        // Return the results in the JSON response
        return response()->json([
            'success' => true,
            'results' => $chefs
        ]);
    }


    public function VoteSearch(Request $request)
    {
        // Ensure 'specialization_id' exists in the request data
        $data = $request->all();

        // Search for chefs by their specialization_id and eager-load related models
        $chefs = Vote::with('chefs',)
            ->where('vote', $data['vote'])
            ->get();

        // Return the results in the JSON response
        return response()->json([
            'success' => true,
            'results' => $chefs
        ]);
    }
}
