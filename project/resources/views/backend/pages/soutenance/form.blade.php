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

            <h5 class="card-title">Ajout de soutenance</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_soutenance.store') }}">
                @csrf
                <input type="text" name="statut" value="a venir" class="form-control" hidden>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="inputNanme4" class="form-label">Date</label>
                        <input type="date" name="date_soutenance" class="form-control">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="inputNanme4" class="form-label">Heure</label>
                        <input type="time" name="heure" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label for="inputNanme4" class="form-label">Thème</label>
                        <select name="demandes_id" class="form-control">
                            @foreach ($demandes as $demande)
                                <option value="{{ $demande->id }}">{{ $demande->theme }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="inputNanme4" class="form-label">Salle</label>
                        <select name="salles_id" class="form-control">
                            @foreach ($salles as $salle)
                                <option value="{{ $salle->id }}">{{ $salle->nom_salle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="inputNanme4" class="form-label">Jury</label>
                        <select name="juries_id" class="form-control">
                            @foreach ($jury as $jurie)
                                <option value="{{ $jurie->id }}">{{ $jurie->code }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="inputNanme4" class="form-label">Observation</label>
                        <textarea name="observation" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->

        </div>
    </div>
@endsection
