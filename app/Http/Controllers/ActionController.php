<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Character;

class ActionController extends Controller
{
    public function update(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->artist_id = $request->artist_id;
        $character->creation_year = $request->creation_year;
        $character->bd = $request->bd;
        $character->save();
        return redirect('characters');
    }

    public function delete(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->delete();
        return redirect('characters');
    }

    public function add(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->artist_id = $request->artist_id;
        $character->creation_year = $request->creation_year;
        $character->bd = $request->bd;
        $character->save();
        return redirect('characters');
    }
}