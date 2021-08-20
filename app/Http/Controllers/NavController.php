<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Artist;

class NavController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function characters()
    {
        $characters = Character::all();
        return view('characters', ['characters' => $characters]);
    }

    public function addCharacter()
    {
        $artists = Artist::all()->sortBy('name');
        return view('addCharacter', ['artists' => $artists]);
    }

    public function updateCharacter(Request $request)
    {
        $characters = Character::findOrFail($request->id);
        $artists = Artist::all()->sortBy('name');
        return view('updateCharacter', ['character' => $characters, 'artists' => $artists]);
    }

    public function artists()
    {
        $artists = Artist::all();
        return view('artists', ['artists' => $artists]);
    }
}