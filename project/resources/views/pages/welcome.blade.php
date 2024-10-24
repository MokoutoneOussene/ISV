<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
</head>

<body class="d-flex justify-content-center m-5">

    {{-- <h1 class="m-5">Le site est en cours de travaux !</h1> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center">
            <div>
                <a href="{{route('home')}}" class="logo d-flex align-items-center">
                    <h1>ISV INTERNATIONAL</h1>
                </a>
            </div>
            <div>
                <marquee behavior="" direction="">
                    <h4><span class="etext-success">Une idée une solution avec vous ! </span><span>Cooperative à but non lucratif</span></h4>
                </marquee>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <section class="container-fluid mt-5">
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12 conteneur">
                <div class="box">
                    <div class="row">
                        <div>
                            <h3 class="text-warning m-t mb-5">LA COOPERATIVE ISV INTERNATIONALE</h3>
                            <h5 class="text-light text-uppercase text-center m-5">a but non lucratif</h5>
                            <div class="text-center">
                                <a class="btn btn-danger" href="{{route('accueil')}}">Qui sommes-nous ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="{{asset('assets/img/welcome/DSC05142.JPG')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="{{asset('assets/img/welcome/image1.png')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <img src="{{asset('assets/img/welcome/DSC05257.JPG')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{asset('assets/img/welcome/DSC05332.JPG')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <img src="{{asset('assets/img/welcome/IMG_5215.JPG')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="{{asset('assets/img/welcome/IMG_1524.JPG')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="{{asset('assets/img/welcome/IMG_1526.jpg')}}" alt="" class="img-fluid" style="width: 100%;">
            </div>
        </div>
    </section>

    @include('layouts.script')
</body>

</html>
