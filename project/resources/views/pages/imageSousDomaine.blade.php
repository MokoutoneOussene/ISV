@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-5">
        <br>
        <h2 class="text-center m-5 text-uppercase">Album photo de {{$finds->libelle}}</h2>
        <div class="row">
            @foreach ($collection as $item)
                <div class="col-lg-3 col-md-12 border-start custom-border">
                    <div class="post-entry-1">
                        <a href="">
                            <img src="{{ asset('storage') . '/' . $item->image }}" alt="Profile" class="img-fluid">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
