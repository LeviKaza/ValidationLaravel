@extends('layouts.base')
@section('css', 'characters')

@section('title', 'Ajout Personnage')

@section('content')
    <form action="add" method="POST">
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
            <label for="formGroupExampleInput4">Artiste :</label>
            <input type="text" class="form-control" id="formGroupExampleInput4" name="artist_id">
        </div>
        <input type="submit" value="Ajouter">
    </form>
@endsection