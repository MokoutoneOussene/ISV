@extends('backend.layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Succès !</strong> {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a class="btn btn-dark mt-4" href="{{ route('gestion_mediatheques.create') }}">+ Ajouter
                            domaines</a>
                        <h5 class="card-title">LISTE DES DOMAINES MEDIATHEQUES</h5>
                        <div class="row" style="display: flex">
                            <div class="col-lg-4 col-md-12">
                                @forelse ($collection as $item)
                                    <!-- Card with an image overlay -->
                                    <div class="card">
                                        <img src="{{ asset('storage') . '/' . $item->image }}" alt="Profile" class="img-fluid">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{$item->titre}}</h5>
                                        </div>
                                        <a class="btn btn-danger" href="">Supprimer</a>
                                    </div><!-- End Card with an image overlay -->
                                @empty
                                    <p class="text-danger">Aucun media dispoinible</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
