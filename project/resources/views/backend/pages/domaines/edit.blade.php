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

            <a class="btn btn-dark mt-4" href="{{ route('gestion_domaines.index') }}">+ Liste des domaines</a>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h5 class="card-title">MODIFICATION DE DOMAINE N° {{ $finds->id }}</h5>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="d-flex">
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success m-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModalPhoto">
                                Editer la photo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalPhoto" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier la photo du domaine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3" method="POST"
                                                action="{{ url('edit_domaine_image/' . $finds->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-12 col-md-12 mb-3">
                                                    <label for="inputAddress" class="form-label">Image
                                                        d'illustration</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </form><!-- Vertical Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Editer la cartographie
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier la cartographie</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3" method="POST"
                                                action="{{ url('edit_cartographie/' . $finds->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-12 col-md-12 mb-3">
                                                    <label for="inputAddress" class="form-label">Image cartographie</label>
                                                    <input type="file" name="carte" class="form-control">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </form><!-- Vertical Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_domaines.update', [$finds->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputNanme4" class="form-label">libelle</label>
                    <input type="text" name="libelle" value="{{ $finds->libelle }}" class="form-control">
                </div>

                {{-- <div class="col-lg-6 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Image d'illustration</label>
                    <input type="file" name="image" value="{{$finds->image}}" class="form-control">
                </div> --}}

                {{-- <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Image cartographie</label>
                    <input type="file" name="carte" value="{{$finds->carte}}" class="form-control">
                </div> --}}

                <div class="col-lg-12 col-md-12 mb-3">
                    <label for="inputAddress" class="form-label">Contenu</label>
                    <textarea name="contenu" value="{{ $finds->contenu }}" id="taskarea" cols="30" rows="5"
                        class="form-control">{!! $finds->contenu !!}</textarea>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- Vertical Form -->

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
