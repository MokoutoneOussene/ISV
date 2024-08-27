@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-4" href="{{ route('gestion_des_images.index') }}">+ Liste des images</a>
            <h5 class="card-title">Ajout d'image</h5>
            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_des_images.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputNanme4" class="form-label">Sous domaine</label>
                    <select name="sous_domaines_id" class="form-control">
                        <option value="">Selectionner...</option>
                        @foreach ($collection as $image)
                            <option value="{{ $image->id }}">{{ $image->libelle }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputEmail4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->
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
