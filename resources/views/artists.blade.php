@extends('layouts.base')
@section('css', 'artists')

@section('title', 'Deesinateurs')

@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Année de naissance</th>
                <th>Nationalité</th>
                <th>Personnages</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
            <tr>
                <td>{{$artist->name}}</td>
                <td>{{$artist->birthday}}</td>
                <td>{{$artist->nationality}}</td>
                <td>{{$artist->character_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection