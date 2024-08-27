@extends('layouts.main')

@section('content')
    @include('require.slider')

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12">
                    <div class="post-entry-1 lg">
                        <h2>Mot du President</h2>
                        <a href="{{route('motPresi')}}">
                            <img src="{{asset('assets/img/favicon.png')}}" style="width: 100%;" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="post-entry-1 lg row">
                        <div class="col-lg-6">
                            <img src="{{asset('assets/img/welcome/image1.png')}}" style="width: 100%; height: 70vh;" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('assets/img/welcome/IMG_0699-768x620.jpg')}}" style="width: 100%; height: 70vh;"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row -->
        </div>
    </section>
    <!-- End Post Grid Section -->

    <section id="contact" class="contact mb-5" style="background-color: #f3eded;">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="">Laisser nous un message!</h2>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="info-item">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Addresse</h3>
                            <address>04 BP 8632 04 Ouaga, Burkina Faso</address>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item info-item-borders">
                            <i class="bi bi-phone"></i>
                            <h3>Téléphone</h3>
                            <p><a href="tel:+22670212846">+226 70212846</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@isvinternational.net">info@isvinternational.net</a></p>
                            <p><a href="mailto:joanny@isvinternational.net">joanny@isvinternational.net</a></p>
                            <p><a href="mailto:isv@isvinternational.net">isv@isvinternational.net</a></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="form mt-5">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Votre nom" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Votre Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Envoyer le Message</button></div>
                    </form>
                </div><!-- End Contact Form -->
            </div>

            <div class="col-lg-6 col-md-12">
                <h2 class="mb-4">Ils nous font confiance !</h2>
                @include('require.confiance')
            </div>
        </div>
    </section>
@endsection
