<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.layout.style')

</head>

<body>
    <main id="main" class="main">
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="d-flex justify-content-center w-100">
                        <img src="{{asset('assets/img/favicon.png')}}" alt="logo" style="width: 100%">
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 shadow">
    
                    @if (session('status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error !</strong> {{session('status')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
    
                    <h3 class="text-center mt-3">AUTHENTIFICATION</h3>
                    <div class="text-center m-3">
                        <img src="{{asset('assets/img/favicon.png')}}" alt="logo" style="width: 50%;">
                    </div>
                    <p class="mt-5" style="font-size: 12px;">
                        Veuillez renseigner vos information pour vous connecter
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Se connecter</button>
                    </form>
    
                    <p class="mt-4" style="font-size: 12px;">
                        Repartir à l'accueil ? <span><a class="text-danger" href="{{route('home')}}">Cliquer ici</a></span>
                    </p>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    @include('backend.layout.script')

</body>

</html>
