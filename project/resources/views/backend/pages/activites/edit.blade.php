@extends('layout.main')

@section('content')
    <section class="container-fluid shadow">
        <div class="row p-3">
            <div class="col-lg-12 col-md-12">
                @if (session('status'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error !</strong> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h3 class="text-center mt-3">Modification de l'utilisateur N° {{$find->id}}</h3>

                <p class="mt-3 text-danger" style="font-size: 12px;">
                    Veuillez renseigner vos information pour vous enregistrer
                </p>

                <form method="POST" action="{{ route('gestion_utilisateur.update', [$find->id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" value="{{$find->nom}}" aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Prénom</label>
                            <input type="text" name="prenom" value="{{$find->prenom}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" value="{{$find->email}}" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Telephone</label>
                            <input type="number" name="telephone" value="{{$find->telephone}}" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Genre</label>
                            <select name="genre" class="form-control">
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Statut</label>
                            <select name="active" class="form-control">
                                <option value="1">Active</option>
                                <option value="2">Desactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Date naissance</label>
                            <input type="date" name="date_naiss" value="{{$find->date_naiss}}" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Role</label>
                            <select name="roles_id" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}"> {{$role->libelle}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Modifier</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
