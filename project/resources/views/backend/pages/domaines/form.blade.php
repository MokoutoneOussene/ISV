@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-4" href="{{route('gestion_domaines.index')}}">+ Liste des domaines</a>

            <h5 class="card-title">AJOUT DE DOMAINE</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_domaines.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputNanme4" class="form-label">libelle</label>
                    <input type="text" name="libelle" class="form-control">
                </div>

                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Image d'illustration</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Image cartographie</label>
                    <input type="file" name="carte" class="form-control">
                </div>

                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Contenu</label>
                    <textarea name="contenu" id="taskarea" cols="30" rows="5" class="form-control"></textarea>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection

@section('script')

<script>
    ClassicEditor
        .create( document.querySelector( '#taskarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
