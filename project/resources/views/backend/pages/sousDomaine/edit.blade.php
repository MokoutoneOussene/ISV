@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succès !</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a class="btn btn-dark mt-4" href="{{ route('gestion_Sous_domaines.index') }}">+ Liste Sous domaine</a>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h5 class="card-title">Modification du sous domaine N° {{ $finds->id }}</h5>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success m-1" data-bs-toggle="modal"
                        data-bs-target="#exampleModalPhoto">
                        Editer la photo
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalPhoto" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier la photo du sous domaine</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" method="POST" action="{{ url('edit_sousdomaine_image/' . $finds->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 mb-3">
                                            <label class="form-label">Image sous domaine</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </form><!-- Vertical Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_Sous_domaines.update', [$finds->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label">Domaine de compétence</label>
                    <input type="text" value="{{ $finds->Domaine->libelle }}" class="form-control" readonly>
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputEmail4" class="form-label">Libelle du sous domaine</label>
                    <input type="text" name="libelle" value="{{ $finds->libelle }}" class="form-control">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Contenu</label>
                    <textarea name="contenu" value="{{ $finds->contenu }}" id="taskarea">{!! $finds->contenu !!}</textarea>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#taskarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
