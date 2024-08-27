@extends('layouts.main')

@section('content')
    <section class="category-section" id="oseb">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">{{ $finds->libelle }}</h4>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="post-entry-1 border-bottom">
                                {!! $finds->contenu !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="post-entry-1 border-bottom">
                                <img src="{{ asset('storage') . '/' . $finds->image }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
