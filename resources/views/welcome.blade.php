<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marcegaglia Vocational Training Center- Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Inter:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="relative bg-gray-50 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative h-full max-w-7xl mx-auto">
                <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-red-600" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-red-600" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="">
                                <span class="sr-only">Registration</span>
                                <img class="h-12 w-auto sm:h-12" src="https://fmorwanda.org/wp-content/uploads/2022/10/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Join our TVET School</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-700 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Join our cause in order to build a world where social inequalities are increasingly
                            reduced and the role of
                            women is valued.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="mt-16 bg-white pb-16 sm:mt-24 sm:pb-24">
                <div class="relative">
                    <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                            <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                                @csrf
                                <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Volunteer Application</h3>
                                <p class="mt-6 text-base text-gray-700">
                                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                                    commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                                </p>
                                <div class="mt-8">
                                   <livewire:registration-component />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
