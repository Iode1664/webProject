@extends('Classique-template')

@section('title')
    Liste des participants
@endsection

@section('custom_css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('contenu')
    <div class="container">
        <br>
        <br>
        <h2>Participants à l'activité {{$activity->nom}}</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Promo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subs as $sub)
                <tr>
                    <td>{{$sub->nom}}</td>
                    <td>{{$sub->prenom}}</td>
                    <td>{{$sub->email}}</td>
                    <td>{{$sub->promo}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <br>
    </div>

@endsection