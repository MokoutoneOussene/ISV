<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
</head>

<body>

    @include('require.nav')

    <main id="main">

        @yield('content')

    </main>
    <!-- End #main -->

    @include('require.footer')

    @include('layouts.script')

</body>

</html>
