<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Http\Requests\UpdateChefRequest;
use App\Models\Chef;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $chefs
            ]);
    }

    public function show(Chef $chef){
        $chef->loadMissing('user', 'sponsorships', 'specializations', 'votes', 'messages', 'reviews');
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]);
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

//         $chef->update($data);

//         // Parentesi relazione. Senza parentesi chiamo il model
//         $chef->specializations()->sync($data['specializations']);

//         $chef->loadMissing('specializations');
//         return response()->json(
//             [
//                 "success" => true,
//                 "results" => $chef
//             ]);
//     }
// }
