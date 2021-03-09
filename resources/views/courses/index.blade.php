<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/cursos/cursos_redu.jpg') }})">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">Los mejores cursos de programación ¡GRATIS! y en español.</h1>
                <p class="mt-2 mb-4 text-lg text-white">
                    Si estás buscando potenciar tus conocimientos de programación, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en ese proceso
                </p>
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('courses-index')
</x-app-layout>
