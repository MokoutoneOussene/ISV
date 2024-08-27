@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succès !</strong> {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h5 class="card-title">Modification de la salle N° {{$find->id}}</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_salle.update', [$find->id])}}">
                @csrf
                @method('PATCH')
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 mb-3">
                        <label for="inputNanme4" class="form-label">Nom salle</label>
                        <input type="text" name="nom_salle" value="{{$find->nom_salle}}" class="form-control">
                    </div>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->
        </div>
    </div>
@endsection
