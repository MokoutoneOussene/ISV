@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-4" href="{{ route('gestion_rapport.index') }}">+ Liste des rapports</a>
            <h5 class="card-title">Ajout de rapport</h5>
            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_rapport.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputNanme4" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputPassword4" class="form-label">Type de rapport</label>
                    <select name="type" class="form-control">
                        <option value="">Selectionner ici...</option>
                        <option value="Rapport">Rapport</option>
                        <option value="Article">Article</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputEmail4" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">fichier du rapport</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
