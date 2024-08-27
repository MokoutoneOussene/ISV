@extends('layouts.main')

@section('content')
    <h2 class="text-center m-5">NOS DOMAINES DE COMPETENCES</h2>
    <div class="container-fluid mt-5">
        <div class="row">
            @forelse ($collection as $item)
                <div class="col-lg-4 col-md-12 border-start custom-border">
                    <div class="post-entry-1">
                        <a href="{{ url ('detailDomaine/' .$item->id) }}">
                            <img src="{{ asset('storage') . '/' . $item->image }}" alt="Profile" class="img-fluid">
                        </a>
                        <h2><a href="{{ url ('detailDomaine/' .$item->id) }}">{{$item->libelle}}</a></h2>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger" role="alert">
                    Aucun domaine n'es disponible presentement !
                </div>
            @endforelse
        </div>
    </div>
@endsection
