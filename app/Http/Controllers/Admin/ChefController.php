<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChefRequest;
use App\Http\Requests\UpdateChefRequest;
use App\Models\Chef;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $chefs = Chef::all();


        return view('admin.chefs.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $chefs = new Chef();
        $specializations = Specialization::all();
        return view('admin.chefs.create', compact('chefs', 'specializations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChefRequest $request)
    {
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
        return redirect()->route('admin.chefs.show', $newChef)->with('create-chef', $newChef->users->name . ' '. 'has been CREATE with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {   // Se sei autenticato manda il json
        if(Auth::id() === $chef->id){
            return view('admin.chefs.show', compact('chef'));
        }else{ // Qui il server dovra rispondere non autenticato e poi vue di conseguenza fare cose
            return redirect()->route('admin.dashboard')->with('wrong-user',  $chef->users->name . ' '. 'it\'s not your profile');
        }
    }

    public function viewDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chef $chef)
    {
        //
        $specializations = Specialization::all();
        return view('admin.chefs.edit', compact('chef', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateChefRequest $request, Chef $chef)
    {
        $data = $request->validated();

        // Se nella request hai il file 'photograph' manda avanti la modifica. Altrimenti non fare nulla.
        if($request->hasFile('photograph')){
            $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
            $data["photograph"] = $img_path;
        }

        if($request->hasFile('CV')){
            $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);
            $data["CV"] = $file_path;
        }

<<<<<<< HEAD
        // $data = $request->validated([]);

        $img_path = Storage::disk('public')->put('upload/img', $data['photograph']);
        $file_path = Storage::disk('public')->put('upload/cv', $data['CV']);

        $data["photograph"] = $img_path;
        $data["CV"] = $file_path;
=======
>>>>>>> branchSicurezza
        $chef->update($data);

        // Parentesi relazione. Senza parentesi chiamo il model
        $chef->specializations()->sync($data['specializations']);
        return redirect()->route('admin.chefs.show', $chef)->with('edit-chef', $chef->users->name . ' '. 'has been edited with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chef $chef)
    {
        //
        $chef->delete();

        return redirect()->route('dashboard')->with('delete-chef', $chef->users->name . ' '. 'has been DELETE with success');
    }
}
