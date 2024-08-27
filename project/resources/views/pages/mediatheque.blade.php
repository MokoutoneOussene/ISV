@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-5">
        <h2 class="text-center m-5">NOTRE BIBLIOTHEQUE D'IMAGES</h2>
        <div class="row">
            @foreach ($collection as $item)
                <div class="col-lg-3 col-md-12 border-start custom-border">
                    <div class="post-entry-1">
                        <a href="">
                            <img src="{{ asset('storage') . '/' . $item->image }}" alt="Profile" class="img-fluid">
                        </a>
                        <h2><a href="">{{ $item->titre }}</a></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
