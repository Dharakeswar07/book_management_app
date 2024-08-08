<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .image-opacity {
            opacity: 0.4; /* Adjust opacity here */
            transition: opacity 0.3s ease;
        }
        .image-opacity:hover {
            opacity: 1; /* Full opacity on hover */
        }
        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .swiper-slide {
            position: relative;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900 transition-colors duration-300">

<!-- Top Bar with Centered Logo -->
<div class="w-full flex justify-center bg-gray-100 dark:bg-gray-900 p-6">
    <a href="/">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-13 w-auto">
    </a>
</div>

<!-- Authentication Links -->
@if (Route::has('login'))
    <div class="fixed top-0 right-0 p-6 text-right">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

<!-- Main Content -->
<div class="flex flex-col justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900 p-4">

    <!-- Swiper Slider -->
    <div class="w-full max-w-6xl">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides with optimized images and text overlay -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/img1.jpg') }}" srcset="{{ asset('images/img1.jpg') }} 600w, {{ asset('images/img1.jpg') }} 1200w, {{ asset('images/img1.jpg') }} 1800w" sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw" alt="Image 1" class="w-full h-auto rounded-lg shadow-md image-opacity" loading="lazy">
                    <div class="slide-content">
                        <div class="text-center mb-6">
                            <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">Welcome to Book Management</h1>
                            <p class="text-lg text-gray-700 dark:text-gray-300">
                                Manage your entire book collection with ease. Use the tools below to explore your library.
                            </p>
                        </div>
                        Explore New Books</div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/img2.jpg') }}" srcset="{{ asset('images/img2.jpg') }} 600w, {{ asset('images/img2.jpg') }} 1200w, {{ asset('images/img2.jpg') }} 1800w" sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw" alt="Image 2" class="w-full h-auto rounded-lg shadow-md image-opacity" loading="lazy">
                    <div class="slide-content">Update Your Library</div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/img3.jpg') }}" srcset="{{ asset('images/img3.jpg') }} 600w, {{ asset('images/img3.jpg') }} 1200w, {{ asset('images/img3.jpg') }} 1800w" sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw" alt="Image 3" class="w-full h-auto rounded-lg shadow-md image-opacity" loading="lazy">
                    <div class="slide-content">Delete Old Books</div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/img4.jpg') }}" srcset="{{ asset('images/img4.jpg') }} 600w, {{ asset('images/img4.jpg') }} 1200w, {{ asset('images/img4.jpg') }} 1800w" sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw" alt="Image 4" class="w-full h-auto rounded-lg shadow-md image-opacity" loading="lazy">
                    <div class="slide-content">Find Your Next Read</div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        lazy: {
            loadPrevNext: true,
        },
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
    });
</script>
</body>
</html>
