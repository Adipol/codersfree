<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/people-2557399_1920.jpg') }})">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">
                    Domina la tecnología web con Coders Free
                </h1>
                <p class="mt-2 mb-4 text-lg text-white">
                    En Coders Free encontrarás cursos, manuales y artículos que te
                    ayudarán a convertirte en un profesional del desarrollador web
                </p>
                @livewire('search')
            </div>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="mb-6 text-3xl text-center text-gray-600">CONTENIDO</h1>
        <div class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 ms:grid-cols-3 lg:grid-cols-4">
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/1.jpg') }}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan
                    disputationi eu sit. Vide electram sadipscing et per.
                </p>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/2.jpg') }}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Manual de laravel</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan
                    disputationi eu sit. Vide electram sadipscing et per.
                </p>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/3.jpg') }}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan
                    disputationi eu sit. Vide electram sadipscing et per.
                </p>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src="{{ asset('img/home/1.jpg') }}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Desarrollo web</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan
                    disputationi eu sit. Vide electram sadipscing et per.
                </p>
            </article>
        </div>
    </section>

    <section class="py-12 mt-24 bg-gray-700">
        <h1 class="text-3xl text-center text-white">No sabes que curso llevar?</h1>
        <p class="text-center text-white">
            Dirigete al catalogo de cursos y filtrados por categoria o nivel
        </p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Catalogo de cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-3xl text-center text-gray-600">ULTIMOS CURSOS</h1>
        <p class="mb-6 text-sm text-center text-gray-500">
            Trabajo duro para seguir subiendo cursos
        </p>
        <div class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 ms:grid-cols-3 lg:grid-cols-4">
            <!-- <div class class="grid grid-cols-4 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 gap-x-6 gap-y-8"> -->
            @foreach ($courses as $course)
            <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>
</x-app-layout>
