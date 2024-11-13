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

            <!-- Navbar -->
            <div class="row mb-2 border-bottom border-2 custom-navbar">
                <div class="col d-flex justify-content-between mx-3 my-2">
                    <span class="fw-bold fs-4"><i class="fa-solid fa-money-bill-wave"></i> DeclaraYa!</span>
                    <button class="btn btn-light fw-semibold" style="background: var(--regent-200);">Get started</button>
                </div>
            </div>


            <div class="content px-0 px-md-5">
                <!-- Grid -->
                <!-- Banner -->
                <div class="row mb-4 banner-row">
                    <div class="col">
                        <h1 class="text-white fw-bold">Get help with your taxes</h1>
                        <p class="text-white">Our simple tutorials help you navigate common tax situations and financial assistance programs.</p>
                        <button class="btn btn-info mt-3">Start a tutorial</button>
                    </div>
                </div>

                <!-- Cards informativas -->
                <div class="row mb-4">
                    <div class="col">
                        <h3 class="fw-bold fs-4">Benefits of using Tax Help</h3>

                        <div class="info-cards d-flex flex-row justify-content-around flex-wrap">
                            <div class="card info-card mb-2">
                                <div class="card-body">
                                    <i class="fa-solid fa-check p-2"></i>
                                    <h5 class="card-title fw-semibold">Get the help you need to file your taxes</h5>
                                    <p class="card-text" style="color: var(--monochrome-300);">We guide you through simple tutorials tailored to your tax situation</p>
                                </div>
                            </div>

                            <div class="card info-card mb-2">
                                <div class="card-body">
                                    <i class="fa-solid fa-check p-2"></i>
                                    <h5 class="card-title fw-semibold">Understand What tax deductions you might qualify for</h5>
                                    <p class="card-text" style="color: var(--monochrome-300);">Use our tutorials to learn about tax deductions and credits</p>
                                </div>
                            </div>

                            <div class="card info-card mb-2">
                                <div class="card-body">
                                    <i class="fa-solid fa-check p-2"></i>
                                    <h5 class="card-title fw-semibold">Find out if you're eligible for financial assistance programs</h5>
                                    <p class="card-text" style="color: var(--monochrome-300);">We'll help you understand if you're eligible for programs like Medicaid or SNAP benefits</p>
                                </div>
                            </div>

                            <div class="card info-card mb-2">
                                <div class="card-body">
                                    <i class="fa-solid fa-check p-2"></i>
                                    <h5 class="card-title fw-semibold">Learn how to report income from side jobs or freelance work</h5>
                                    <p class="card-text" style="color: var(--monochrome-300);">Learn how to report income from 1990s or other forms for side jobs or freelance work</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <h3 class="fw-bold fs-4">What people are saying about us</h3>
                        
                        <div class="reviews-wrapper">

                            @foreach ($users as $name => $image)
                                <div class="card review-card">
                                    <div class="card-body">
                                        <div class="card-info">
                                            <span class="d-flex flex-row">
                                                <img src="{{ asset($image) }}" alt="{{ $name }}">

                                                <div class="review-info ms-3">
                                                    <h5 class="card-title">{{ $name }}</h5>
                                                    <p class="card-subtitle" style="color: var(--monochrome-300);">November 12, 2024</p>
                                                </div>
                                            </span>
                                        </div>

                                        <p class="card-text">
                                            @for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid fa-star"></i>
                                            @endfor
                                            <p>
                                            I used DeclaraYa to figure out how to report my freelance income. The tutorial was easy to tollow and helped me understand the process. I'm grateful for this resource!
                                            </p>
                                            <span>
                                                <span class="ms-3">
                                                    <i class="fa-regular fa-thumbs-up"></i>
                                                    3
                                                </span>
                                                <span class="ms-3">
                                                    <i class="fa-regular fa-thumbs-down"></i>
                                                    0
                                                </span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">FAQ</div>
                </div>

                <div class="row mb-4">
                    <div class="col">Call to action</div>
                </div>
            </div>
            
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>