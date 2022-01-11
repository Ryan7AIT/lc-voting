<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-bg">

        <header class="flex items-center justify-between p-6">
            <a href="">Logo</a>
            <div class="flex items-center">
                @if (Route::has('login'))
                <div class=" px-6 py-4">
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, animi placeat tempore at veritatis beatae et iusto dolore quae praesentium? Repudiandae veniam eaque dignissimos nam corrupti quod, voluptatem nobis mollitia. Ad architecto blanditiis minima provident itaque earum porro voluptas eligendi non, illo nemo, consectetur esse ea libero vero. Nobis soluta, recusandae officiis vero, nulla veniam animi impedit odit molestias, sequi atque. Sit repellat maiores pariatur non, adipisci veniam neque eum consequuntur impedit eius, expedita assumenda! Ipsam, aspernatur magnam, delectus laudantium autem voluptate repellat, quisquam minima distinctio facilis officiis maiores sed libero veniam odit vitae fugit dignissimos natus tenetur amet necessitatibus?
            </div>

            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="border-b-4 pb-3 flex uppercase font-semibold space-x-10">
                        <li><a href="" class="border-b-4 pb-3 border-blue"> All Ideas (88)</a></li>
                        <li><a href="" class="text-gray-400 transition-500 ease-in border-b-4 pb-3 hover:border-blue"> All Ideas (88)</a></li>
                        <li><a href="" class="text-gray-400 transition-500 ease-in border-b-4 pb-3 hover:border-blue"> All Ideas (88)</a></li>

                    </ul>

                    <ul class="border-b-4 pb-3 flex uppercase font-semibold space-x-10">
                        <li><a href="" class="text-gray-400 transition-500 ease-in border-b-4 pb-3 hover:border-blue"> All Ideas (88)</a></li>
                        <li><a href="" class="text-gray-400 transition-500 ease-in border-b-4 pb-3 hover:border-blue"> All Ideas (88)</a></li>

                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot}}
                </div>

            </div>

        </main>
    </body>
</html>
