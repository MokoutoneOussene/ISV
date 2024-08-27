<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <h3>ISV INTERNATIONAL</h3>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('competences') }}">Nos competances</a></li>
                <li><a href="{{ route('rapport') }}">Rapport</a></li>
                <li><a href="{{ route('mediatheque') }}">Mediathèque</a></li>
                <li><a href="{{ route('modeIntervention') }}">Mode d'intervention</a></li>
                <li><a href="{{ route('about') }}">A propos</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="position-relative">
            <a href="https://web.facebook.com/profile.php?id=100089590635916" class="mx-2" target="_blank"><span
                    class="bi-facebook"></span></a>
            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div> <!-- End Search Form -->
        </div>
    </div>
</header>
