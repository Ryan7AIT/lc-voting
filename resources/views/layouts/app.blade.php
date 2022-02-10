<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>lc-voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        {{-- livewire --}}

        @livewireStyles


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-bg">

        <header class="flex items-center justify-between p-6">
            <a href="">Logo</a>
            <div class="flex items-center">
                @if (Route::has('login'))
                <div class=" px-6 py-4

                ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" class="w-10 h-10 rounded-full" alt="">
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="mr-5 w-70">
                <div
                    class="bg-white border-2 border-blue rounded-xl mt-16"
                    style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    "
                >
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">
                        @auth
                            Let us know what you would like and we'll take a look over!
                        @else
                            Please login to create an idea.
                        @endauth

                        </p>
                    </div>

                    @auth
                        <livewire:create-idea />
                    @else



                    <div class="my-6 text-center">
                        <a
                            href="{{ route('login') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                        >
                            <span class="ml-1">Login</span>
                        </a>
                        <a
                            href="{{ route('register') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4"
                        >
                            Sign Up
                        </a>
                    </div>


                    @endauth
                </div>
            </div>

            <div class="w-175">
                <livewire:status-filters />

                <div class="mt-8">
                    {{ $slot}}
                </div>

            </div>

        </main>

        @livewireScripts

    </body>
</html>
