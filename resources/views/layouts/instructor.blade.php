<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <div class="container grid grid-cols-5 py-5">
            <aside>
                <h1 class="mb-4 text-lg font-bold">Edición del curso</h1>
                <ul class="text-sm text-gray-600">
                    <li class="pl-2 mb-1 leading-7 border-l-4 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif">
                        <a href="{{ route('instructor.courses.edit', $course) }}">Información del curso</a>
                    </li>
                    <li class="pl-2 mb-1 leading-7 border-l-4 @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent @endif">
                        <a href="{{ route('instructor.courses.curriculum', $course) }}">Lección del curso</a>
                    </li>
                    <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                        <a href="">Metas del curso</a>
                    </li>
                    <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                        <a href="">Estudiantes</a>
                    </li>
                </ul>
            </aside>
            <div class="col-span-4 card">
                <main class="text-gray-600 card-body">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @isset($js)
    {{ $js }}
    @endisset

</body>

</html>