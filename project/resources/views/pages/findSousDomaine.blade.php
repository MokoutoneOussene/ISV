@extends('layouts.main')

@section('content')
    <section class="category-section" id="oseb">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>{{ $finds->libelle }}</h2>
                <div><a href="{{ url('realisation_Sous_Domaine/' . $finds->id) }}" class="more">Réalisation obtenus</a>
                </div>
                <div><a href="{{ url('image_Sous_Domaine/' . $finds->id) }}" class="more">Album photo</a></div>
                <div><a href="{{ url('projet_Sous_Domaine/' . $finds->id) }}" class="more">Projet en cours</a></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="post-entry-1 border-bottom">
                                {!! $finds->contenu !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Button trigger modal -->
                            <h4 class="mb-5">Les activités du {{ $finds->libelle }}</h4>
                            <div class="post-entry-1">
                                @foreach ($activites as $item)
                                    <a href="{{ url('detailActivites/' . $item->id) }}"><strong>{{ $item->libelle }}</strong></a>
                                    <a href="{{ url('detailActivites/' . $item->id) }}">
                                        <img src="{{ asset('storage') . '/' . $item->image }}" alt="" class="img-fluid">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
