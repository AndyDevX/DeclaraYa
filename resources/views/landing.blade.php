<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeclaraYa!</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="wrapper mt-4 mx-3 mx-lg-5">

            {{-- Componente Navbar --}}
            <x-landing.navbar />

            <div class="content px-0 px-md-5">

                {{-- Componente Banner --}}
                <x-landing.banner />

                {{-- Component Info cards --}}
                <x-landing.info-cards />

                {{-- Componente reviews --}}
                <x-landing.reviews :users="$users" />

                {{-- Componente FAQ --}}
                <x-landing.faq />

                {{-- Componente Call to action --}}
                <x-landing.call-to-action />
            </div>

            {{-- Footer --}}
            <x-landing.footer />

        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>