<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes')->paginate(5);
        return response()->json(
            [
                "success" => true,
                "results" => $chefs
            ]);
    }

    public function show(Chef $chef){
        $chef->loadMissing('user', 'sponsorships', 'specializations', 'votes', 'messages');
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]);
    }

    public function store(StoreChefRequest $request){
        $data = $request->validated();
        if($request->hasFile('photograph')){
            $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
            $data["photograph"] = $img_path;
        }
        if($request->hasFile('CV')){
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
            ]);
    }

    // public function update(StoreChefRequest $request, Chef $chef){
    //     $data = $request->validated();
    //     dd($request->all());

    //     // Se nella request hai il file 'photograph' manda avanti la modifica. Altrimenti non fare nulla.
    //     if($request->hasFile('photograph')){
    //         if ($chef->photograph) {
    //             Storage::disk('public')->delete($chef->photograph);
    //         }
    //         $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
    //         $data["photograph"] = $img_path;
    //     }

    //     if($request->hasFile('CV')){
    //         if ($chef->CV) {
    //             Storage::disk('public')->delete($chef->CV);
    //         }
    //         $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
    //         $data["CV"] = $file_path;
    //     }

    //     $chef->update($data);

    //     // Parentesi relazione. Senza parentesi chiamo il model
    //     $chef->specializations()->sync($data['specializations']);
    //     return response()->json(
    //         [
    //             "success" => true,
    //             "results" => $chef
    //         ]);
    // }
}
