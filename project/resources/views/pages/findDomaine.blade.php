@extends('layouts.main')

@section('content')
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up" id="tout_haut">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="post-entry-1 lg">
                        <h4>Cartographie des régions bénéficiaires des ouvrages facilités par la coopérative ISV
                            International</h4>
                        <a href="{{ $finds->carte }}" target="_blank">
                            <img src="{{ asset('storage') . '/' . $finds->carte }}" style="width: 100%;" alt="cartes"
                                class="img-fluid">
                        </a>
                        <p>{!! $finds->contenu !!}</p>
                        <img src="{{ asset('assets/img/signature.PNG') }}" alt="tableau 1" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2><a href="#">{{ $finds->libelle }}</a></h2>
                    <div class="row g-5">
                        @forelse ($collection as $item)
                            <div class="col-lg-6">
                                <div class="post-entry-1">
                                    <a href="{{ url('detailSousDomaine/' . $item->id) }}"><img
                                            src="{{ asset('storage') . '/' . $item->image }}" style="width: 100%;" alt="cartes"
                                            class="img-fluid"></a>
                                    <h2><a href="{{ url('detailSousDomaine/' . $item->id) }}">{{ $item->libelle }}</a></h2>
                                </div>
                            </div>
                        @empty
                            <!--<p class="text-danger">Aucun sous domaine disponible !</p>-->
                        @endforelse
                    </div>
                    <hr>
                </div>

            </div>
            <!-- End .row -->
        </div>
    </section>
@endsection
