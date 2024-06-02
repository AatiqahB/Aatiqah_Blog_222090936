<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('/img/purple_back.jpg'); 
            background-size: cover;
            background-position: center;
        }
    </style>
    </head>
    <body class="font-sans antialiased dark:text-gray-100">
    <div class="background-image text-gray-800 dark:text-gray-100">
        <div class="bg-gray-900 bg-opacity-50 dark:bg-opacity-50 relative min-h-screen flex flex-col items-start justify-start selection:bg-red-600 selection:text-white px-6 py-10">
            <div class="relative w-full max-w-2xl lg:max-w-4xl mt-60 ml-10">
                <header class="gap-6">
                    <div class="text-left">
                        <h1 class="text-5xl lg:text-6xl font-bold text-white">Welcome to BlogWorm</h1>
                        <p class="mt-4 lg:mt-6 text-xl lg:text-2xl text-gray-200">Please log in or register to continue.</p>
                    </div>
                </header>

                <section class="mt-6 lg:mt-10">
                    @if (Route::has('login'))
                        <nav class="space-y-2 lg:space-y-0 lg:space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                class="text-white underline transition hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-red-600 dark:hover:text-red-300">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                class="bg-transparent text-white border border-white px-6 py-3 text-lg rounded transition hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-white dark:hover:bg-white dark:hover:text-black">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                    class="bg-white text-black border border-transparent px-6 py-3 text-lg rounded transition hover:bg-transparent hover:text-white hover:border-white focus:outline-none focus:ring-2 focus:ring-white dark:hover:bg-transparent dark:hover:text-white dark:hover:border-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </section>

            </div>
        </div>
    </div>
    </body>

</html>