@extends('layouts.main')

@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <h1 class="mb-5">La Cooperative ISV International</h1>
                        <p>
                            <span class="firstcharacter">F</span>
                            orte d'une expérience de plus de deux décenies dans la création et le renforcement
                            des initiatives de développement local, capitaliser les expériences les plus
                            innovantes pour les mettre à la dispositiondes ONG et des acteurs du développement local.
                        </p>

                        <figure class="my-4">
                            <img src="{{ asset('assets/img/favicon.png') }}" alt="" class="img-fluid"
                                style="width: 75%;">
                        </figure>
                    </div><!-- End Single Post Content -->
                </div>
                <div class="col-md-3">

                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">
                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active text-info" id="pills-popular-tab">Nos Rapports</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                aria-labelledby="pills-popular-tab">
                                @forelse (App\Models\Rapport::where('type', '=', 'Rapport')->get() as $item)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{$item->type}}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{$item->date}}</span></div>
                                        <h2 class="mb-2"><a href="{{$item->file}}" target="_blank">{{$item->titre}}</a></h2>
                                    </div>
                                @empty
                                    <p class="text-danger">Aucun rapport disponible !</p>
                                @endforelse
                            </div> <!-- End Popular -->
                        </div>
                    </div>

                    <div class="aside-block">
                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active text-info" id="pills-popular-tab">Nos Articles</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                aria-labelledby="pills-popular-tab">
                                @forelse (App\Models\Rapport::where('type', '=', 'Article')->get() as $item)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{$item->type}}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{$item->date}}</span></div>
                                        <h2 class="mb-2"><a href="{{$item->file}}" target="_blank">{{$item->titre}}</a></h2>
                                    </div>
                                @empty
                                    <p class="text-danger">Aucun rapport disponible !</p>
                                @endforelse
                            </div> <!-- End Popular -->
                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title text-danger">Video</h3>
                        <div class="video-post">
                            <a href="videos/sacrifice-nest-pas-sacrifice.mp4" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="{{asset('assets/img/favicon.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                </div>
            </div>
        </div>
    </section>
@endsection
