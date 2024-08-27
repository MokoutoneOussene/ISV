@extends('layout.main')

@section('content')
    <p>{{ $find->note }}</p>
    <p>{{ $find->appreciation }}</p>
    <p>{{ $find->Salle->nom_salle }}</p>
    <p>{{ $find->observation }}</p>
@endsection
