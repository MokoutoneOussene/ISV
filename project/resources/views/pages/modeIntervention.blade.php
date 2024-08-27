@extends('layouts.main')

@section('content')
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="comments">
                        <h2><a class="text-info" href="#">Mode d’intervention</a></h2>
                        <div class="comment d-flex mb-4">
                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                <div class="comment-replies bg-light p-3 mt-3 rounded">
                                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">Mode 1</h6>
                                    <div class="reply d-flex mb-4">
                                        <div class="flex-grow-1 ms-2 ms-sm-3">
                                            <div class="reply-body">
                                                Sur la base d’une demande officielle adressée par courrier postal ou par
                                                courrier
                                                électronique à notre Structure, nous procédons à l’élaboration d’une
                                                convention de
                                                collaboration que nous soumettons au partenaire; Suite à une réception de
                                                dossier
                                                de demande de financement, nous convenons d’une convention collaboration
                                                pour la
                                                mobilisation de ressources ou mettons en relation le demandeur à des
                                                partenaires
                                                techniques
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-replies bg-light p-3 mt-3 rounded">
                                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">Mode 2</h6>
                                    <div class="reply d-flex mb-4">
                                        <div class="flex-grow-1 ms-2 ms-sm-3">
                                            <div class="reply-body">
                                                A la demande du partenaire technique pour le financement de projet de
                                                développement communautaire ou pour la réalisation d’investissements
                                                économiques.
                                                Nous mettons à la disposition du partenaire les informations sur le contexte
                                                socio
                                                économique et sur les besoins réels des communautés vivant sur la zone
                                                d’intervention
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-replies bg-light p-3 mt-3 rounded">
                                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">Mode 3</h6>
                                    <div class="reply d-flex mb-4">
                                        <div class="flex-grow-1 ms-2 ms-sm-3">
                                            <div class="reply-body">
                                                Nous procédons à des études diagnostiques afin d’informer le partenaire
                                                sur des opportunités d’investissements dans des secteurs économiques de
                                                très forte rentabilité
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Comments -->
                </div>

                <div class="col-lg-6">
                    <div class="post-entry-1 lg">
                        <h2><a href="#">Mot du President</a></h2>
                        <p class="mb-4 d-block">
                            Vous êtes un manager d’ONG ou d’OSC ! Vous êtes un groupe de travail ! Vous
                            cherchez un interlocuteur ou un partenaire ! Vous souhaitez soutenir ou mettre
                            en place un projet ou programme de développement ! Vous souhaitez une étude de
                            projet ou programme ! Vous voulez visiter le Burkina dans un cadre professionnel
                            ou faire du tourisme intelligent en milieu rural ou urbain !
                        </p>
                        <p class="mb-4 d-block">
                            La cooperative <span style="font-style: italic; font-weight: bold;">ISV International</span>
                            (Une Idée, une Solution avec
                            Vous) vous propose son expertise dans les domaines suivants :
                        </p>
                        <p class="mb-4 d-block" style="font-style: italic;">
                            • Développement rural agricole et environnement ;<br>
                            • Développement du secteur privé ;<br>
                            • Développement social ;<br>
                            • Infrastructures, aménagement et développement local ;<br>
                            • Assistance administrative et financière ;<br>
                            • Gestion des ressources humaines ;<br>
                            • Suivi-évaluation ; formation ; gestion des programmes et projets.
                        </p>
                        <p class="mb-4 d-block">
                            Nous vous accompagnons dans la concrétisation de vos idées. La cooperative <span
                                style="font-style: italic; font-weight: bold;">ISV International</span>
                            est une structure de mobilisation des ressources humaines et financières au
                            profit du développement.
                        </p>
                        <p class="mb-4 d-block">
                            Notre approche d’intervention est de travailler à organiser et mobiliser
                            les populations autour des initiatives de développement social et communautaire,
                            afin que celles-ci soient participatives, engagées, impartiales et inclusives.
                            Une forte implication de la population à la base est donc prioritaire aux fins que
                            l’appropriation des initiatives de développement restent maîtrisées par les
                            bénéficiaires.
                        </p>
                        <p class="mb-4 d-block">
                            La cooperative <span style="font-style: italic; font-weight: bold;">ISV International</span> est
                            aussi une structure de mobilisation des ressources
                            humaines et financières au profit du développement et elle est composée d’une
                            équipe pluridisciplinaire.
                        </p>
                        <p class="mb-4 d-block">
                            Nous collaborons sous l’éthique qui se résume tout simplement
                            « respect actif de la vie », mais en toute conscience et responsabilité…
                            (comme Raoul FOLLEREAU l’a si bien énoncé « aimer et agir »).
                        </p>
                        <p class="mb-4 d-block">
                            Vous qui avez des idées et qui désirez les appliquer, n’esitez pas, vous pouvez nous
                            contacter sans engagement.
                        </p>

                        <div class="d-flex align-items-center author">
                            <img src="{{asset('assets/img/signature.png')}}" alt="tableau 1" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
            <!-- End .row -->
        </div>
    </section>
    <!-- End Post Grid Section -->

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
