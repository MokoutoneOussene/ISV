@extends('layouts.main')

@section('content')
    <section id="contact" class="contact mb-5" style="background-color: #f3eded;">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Laisser nous un message!</h1>
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
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom"
                                required>
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
    </section>
@endsection
