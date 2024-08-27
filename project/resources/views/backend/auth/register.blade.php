<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>

    <section class="container-fluid">
        <div class="row p-3">
            <div class="col-lg-6 col-md-12">
                @if (session('status'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error !</strong> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h3 class="text-center mt-3">CREATION DE COMPTE</h3>

                <p class="mt-3 text-danger" style="font-size: 12px;">
                    Veuillez renseigner vos information pour vous enregistrer
                </p>

                <form method="POST" action="{{ route('add_users') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="roles_id" value="2" class="form-control" hidden>
                    <input type="text" name="active" value="2" class="form-control" hidden>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Telephone</label>
                            <input type="number" name="telephone" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Genre</label>
                            <select name="genre" class="form-control">
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Date naissance</label>
                            <input type="date" name="date_naiss" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Enregistrer</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </form>

                <p class="mt-4" style="font-size: 12px;">
                    Avez-vous un compte ? <span><a class="text-danger"
                            href="{{ route('accueil') }}">Se connecter</a></span>
                </p>
            </div>
            <div class="col-lg-6 col-md-12 p-2">
                <div class="">
                    <img src="{{ asset('assets/img/news-3.jpg') }}" class="w-100" alt="" style="height: 90vh;">
                </div>
            </div>
        </div>
    </section>

    @include('layout.script')
</body>

</html>
