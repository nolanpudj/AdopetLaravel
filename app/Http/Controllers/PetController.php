<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function pet()
    {
        $dogs = Pet::where('petType', 'Dog')->take(3)->get();
        $cats = Pet::where('petType', 'Cat')->take(3)->get();
        $fish = Pet::where('petType', 'Fish')->take(3)->get();
        $birds = Pet::where('petType', 'Bird')->take(3)->get();
        $reptiles = Pet::where('petType', 'Reptiles')->take(3)->get();
        $exotics = Pet::where('petType', 'Exotic')->take(3)->get();

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
        $data = Pet::where('petType', $type)->paginate(12);
        // $data = Pet::where('petType', $type)->get();
        return view('pet.petTypeResult', [
            'data' => $data
        ]);
    }

    public function petDetail($id)
    {
        $data = Pet::findOrFail($id);

        return view('pet.petDetails', [
            'data' => $data
        ]);
    }

    public function addAnimal(){

        return view('form.add_animal');
    }

    public function addAnimalValidate(Request $request){
        // dd($request);
        $animal = new Pet();
        $animal->petName = $request->petName; // kalau form 
        $animal->petType = $request->petType;
        $animal->image = "Dog_Rectangle 7-1.png";
        $animal->gender = "Male";
        $animal->health = "Not Vaccinated";
        $animal->shelter_id = 1;
        $animal->status = "adopted";
        $animal->save();
        dd($animal);
        return redirect()->back();
    }
}
