@extends('layouts.base')
@section('css', 'characters')

@section('title', 'Personnages')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Année de création</th>
                <th scope="col">Nom de bd</th>
                <th scope="col">Dessinateur</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td>{{$character->name}}</td>
                <td>{{$character->creation_year}}</td>
                <td>{{$character->bd}}</td>
                <td>{{$character->artist->name}}</td>
                <td>
                    <form action="updateCharacter" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input type="submit" value="Modif.">
                    </form>
                </td>
                <td>
                    <form action="delete" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p><a href="addCharacter">Ajouter</a></p>
@endsection