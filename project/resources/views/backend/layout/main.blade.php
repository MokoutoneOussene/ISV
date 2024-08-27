<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.layout.style')

</head>

<body>

    <!-- ======= Header ======= -->
        @include('backend.require.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('backend.require.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('backend.require.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('backend.layout.script')

</body>

</html>
