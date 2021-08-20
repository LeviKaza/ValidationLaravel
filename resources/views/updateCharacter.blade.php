@extends('layouts.base')
@section('css', 'updateCharacter')

@section('title', 'Modifier Personnage')

@section('content')
    <form action="update" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$character->id}}">
        <div class="form-group">
            <label for="formGroupExampleInput">Nom :</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$character->name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Année de Création :</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="creation_year" value="{{$character->creation_year}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">BD affilié :</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" name="bd" value="{{$character->bd}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput4">Artiste :</label>
            <input type="text" class="form-control" id="formGroupExampleInput4" name="artist_id" value="{{$character->artist_id}}">
        </div>
        <input type="submit" value="Update">
    </form>
@endsection