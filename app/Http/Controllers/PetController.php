<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Shelter;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function pet()
    {
        $dogs = Pet::where('petType', 'Dog')->take(4)->get();
        $cats = Pet::where('petType', 'Cat')->take(4)->get();
        $fish = Pet::where('petType', 'Fish')->take(4)->get();
        $birds = Pet::where('petType', 'Bird')->take(4)->get();
        $reptiles = Pet::where('petType', 'Reptiles')->take(4)->get();
        $exotics = Pet::where('petType', 'Exotic')->take(4)->get();

        return view('pet.pet', [
            'dogs' => $dogs,
            'cats' => $cats,
            'fish' => $fish,
            'birds' => $birds,
            'reptiles' => $reptiles,
            'exotics' => $exotics
        ]);
    }

    public function resultType($type)
    {
        $data = Pet::where('petType', $type)->paginate(4);
        // $data = Pet::where('petType', $type)->get();
        return view('pet.petTypeResult', [
            'data' => $data
        ]);
    }

    public function petDetail($id)
    {
        $data = Pet::where('id', '=',$id)->first();

        return view('pet.petDetails',compact('data'));
    }

    public function shelterDetail($id){
        // dd($id);
        $shelter = Shelter::where('id', '=',$id)->first();
        $pet = Pet::where('shelter_id', '=',  $id)
                    ->where('status', '=', 'not adopted')->limit(5)->get();

        // dd($shelter);
        return view('pet.shelterDetails', compact('shelter', 'pet'));
    }

    public function addAnimal(){

        return view('form.add_animal');
    }

    public function addAnimalValidate(Request $request){
       
        // dd($request);
        $animal = new Pet();
        $animal->petName = $request->petName; // kalau form 
        $animal->petType = $request->petType;
        $animal->petBreed = $request->petBreed;
        // $animal->image = $request->image;
        $animal->gender = $request->gender;
        $animal->petDesc = $request->petDesc;
        $animal->health = $request->status;
        $animal->shelter_id = 1;
        $animal->status = "not adopted";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path("assets/{$request->petType}/");

            // Save the image to the public/assets/ directory
            $file->move($path, $filename);

            $animal->image = $filename;
        }
        $animal->save();
        return redirect()->back()->with("success", $request->petName."Pet has been successfully Inserted");
    }

    public function edit($id)
    {
        $pet = Pet::where('id', '=' , $id)->first();
        // dd($pet->petName);
        return view('form.edit_animal', compact('pet'));
    }

    public function editAnimalValidate(Request $request, $id){
        $pet = Pet::where('id', '=' , $id)->first();
        $pet->petName = $request->petName;
        $pet->petType = $request->petType;
        $pet->image = $request->image;
        $pet->petBreed = $request->petBreed;
        $pet->petDesc = $request->petDesc;
        $pet->health = $request->status;
        $pet->gender = $request->gender;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path("assets/{$request->petType}/");
            $file->move($path, $filename);

            $pet->image = $filename;
        }
        $pet->update();
        return redirect()->back()->with('success', 'Pet updated successfully');

        // habis update harusnya delete fotonya biar ga ngeleak memorinya
    }

    public function deleteAnimalValidate($id){
        $pet = Pet::where('id', '=' , $id)->first();
        $petName = $pet->petName;
        $pet->delete();
        return redirect()->back()->with('success', 'Pet with name '.$petName.' delete successfully');;
    }
    public function update(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $pet->update($request->all());

        return redirect()->route('pet.pet')->with('success', 'Pet updated successfully');
    }

    // public function searchPet(Request $request){
    //     $pets = Pet::where('petName', 'like', '%' . $request->searchpet . '%')
    //                 ->orWhere('petType', 'like', '%' . $request->searchpet . '%')
    //                 ->paginate(3);
    //                 // ->get();
    //     // dd($pets);
    //     return view('pet.petSearch', compact('pets'));
    // }

    public function searchPet(Request $request)
    {
        $searchQuery = $request->input('searchpet');

        $pets = Pet::where('petName', 'like', '%' . $searchQuery . '%')
            ->orWhere('petType', 'like', '%' . $searchQuery . '%')
            ->orWhere('petBreed', 'like', '%' . $searchQuery . '%')
            ->paginate(4);

        return view('pet.petSearch', compact('pets', 'searchQuery'));
    }
}

