@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-4" href="{{route('gestion_mediatheques.index')}}">+ Liste des medias</a>

            <h5 class="card-title">AJOUT DE MEDIA</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_mediatheques.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputNanme4" class="form-label">Titre de l'image</label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Image d'illustration</label>
                    <input type="file" name="image" class="form-control">
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
