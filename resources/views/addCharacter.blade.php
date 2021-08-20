@extends('layouts.base')
@section('css', 'characters')

@section('title', 'Ajout Personnage')

@section('content')
    <form action="add" method="POST" class="main-contents">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nom :</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Année de Création :</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="creation_year">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">BD affilié :</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" name="bd">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">Artiste :</label>
            <select type="text" class="form-control" name="artist_id">
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Ajouter">
    </form>
@endsection