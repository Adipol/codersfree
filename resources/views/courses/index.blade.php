<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/cursos/cursos_redu.jpg') }})">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">Los mejores cursos de programación ¡GRATIS! y en español.</h1>
                <p class="mt-2 mb-4 text-lg text-white">
                    Si estás buscando potenciar tus conocimientos de programación, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en ese proceso
                </p>
                <div class="relative pt-2 mx-auto text-gray-600">
                    <input class="w-full h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none" type="search" name="search" placeholder="Aprender?">
                    <button type="submit" class="absolute top-0 right-0 px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-700 font-blod">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>
    @livewire('course-index')
</x-app-layout>