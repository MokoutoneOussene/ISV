@extends('layouts.main')

@section('content')
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">A propos de nous</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        <img src="{{asset('assets/img/favicon.png')}}" alt="" style="width: 100%;" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">A propos de nous</div>
                        <h2 class="mb-4 display-4">La cooperative ISV International</h2>

                        <p>
                            Vous êtes un manager d’ONG ou d’OSC ! Vous êtes un groupe de travail ! Vous
                            cherchez un interlocuteur ou un partenaire ! Vous souhaitez soutenir ou mettre en
                            place un projet ou programme de développement ! Vous souhaitez une étude de projet
                            ou programme !Vous voulez visiter le Burkina dans un cadre professionnel ou faire
                            du tourisme intelligent en milieu rural ou urbain ! La cooperative ISV International(Une Idée,
                            une Solution avec Vous) vous propose son expertise dans
                            les domaines suivants
                        </p>

                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="{{asset('assets/img/welcome/DSC05332.JPG')}}" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">
                        <p>
                            Vous êtes un groupe de travail! Vous cherchez un interlocuteur ou un partenaire!
                            Vous souhaitez soutenir ou mettre en place un projet ou programme de développement!
                            Vous souhaitez un étude de projet ou programme! Vous voulez visiter le Burkina Faso
                            dans un cadre professionnel ou faire du tourisme intelligent en milieu rural ou urbain!
                        </p>
                        <p>
                            La cooperative ISV International (Une Idée, une Solution avec Vous) vous
                            propose son expertise dans les domaines suivants:
                        </p>
                        <p>
                            • Développement rural agricole et environnement ;<br>
                            • Développement du secteur privé ;<br>
                            • Développement social ;<br>
                            • Infrastructures, aménagement et développement local ;<br>
                            • Assistance administrative et financière ;<br>
                            • Gestion des ressources humaines ;<br>
                            • Suivi-évaluation ; formation ; gestion des programmes et projets.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4 class="display-4">Personnes ressources bénévoles d'ISV (Pluridisciplinaires)</h4>
                            <p>Des personnes de référence qui adhère et qui contribut aux activités d'ISV</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center mb-5">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>SOPHIE</h4>
                    <span class="d-block mb-3 text-uppercase">Personne ressource bénévole</span>
                </div>
                <div class="col-lg-3 text-center mb-5">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>JACQUES MBIYE</h4>
                    <span class="d-block mb-3 text-uppercase">Personne ressource bénévole</span>
                </div>
                <div class="col-lg-3 text-center mb-5">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>DIRK KNAPENE</h4>
                    <span class="d-block mb-3 text-uppercase">Personne ressource bénévole</span>
                </div>
                <div class="col-lg-3 text-center mb-5">
                    <img src="{{asset('assets/img/favicon.png')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>GUY PULMAN</h4>
                    <span class="d-block mb-3 text-uppercase">Personne ressource bénévole</span>
                </div>
            </div>
        </div>
    </section>
@endsection
