<div>
    <div class="py-4 mb-16 bg-gray-200">
        <div class="flex px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <button class="h-12 px-4 mr-4 text-gray-700 bg-white rounded-lg shadow">
                <i class="mr-2 text-xs fas fa-archway"></i>
                Todos los cursos
            </button>
            <div class="relative mr-4" x-data="{ open:false }">
                <button class="block h-12 px-4 overflow-hidden text-gray-700 bg-white rounded-lg shadow focus:outline-none" x-on:click="open=true">
                    <i class="mr-2 text-sm fas fa-tags"></i>
                    Categoria
                    <i class="ml-2 text-sm fas fa-angle-down"></i>
                </button>

                <div class="absolute right-0 w-40 py-2 mt-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open=false">
                    <a href="#" class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded text-normal hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr>
                        </hr>
                    </div>
                    <a href="#" class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded text-normal hover:bg-purple-500 hover:text-white">
                        Logout
                    </a>
                </div>
            </div>

            <div class="relative" x-data="{ open:false }">
                <button class="block h-12 px-4 overflow-hidden text-gray-700 bg-white rounded-lg shadow focus:outline-none" x-on:click="open=true">
                    <i class="mr-2 text-sm fas fa-tags"></i>
                    Niveles
                    <i class="ml-2 text-sm fas fa-angle-down"></i>
                </button>

                <div class="absolute right-0 w-40 py-2 mt-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open=false">
                    <a href="#" class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded text-normal hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr>
                        </hr>
                    </div>
                    <a href="#" class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded text-normal hover:bg-purple-500 hover:text-white">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 ms:grid-cols-3 lg:grid-cols-4">
        <!-- <div class class="grid grid-cols-4 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 gap-x-6 gap-y-8"> -->
        @foreach ($courses as $course)
        <article class="overflow-hidden bg-white rounded shadow-lg">
            <img src=" {{ Storage::url($course->image->url) }}" alt="" />
            <div class="px-6 py-4">
                <h1 class="mb-2 text-xl leading-6 text-gray-700">
                    {{Str::limit($course->title,40)}}
                </h1>
                <p class="mb-2 text-sm text-gray-500">
                    Prof: {{ $course->teacher->name}}
                </p>

                <div class="flex">
                    <ul class="flex text-sm">
                        <li class="mr-1">
                            <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{ $course->rating >= 3? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                    </ul>
                    <p class="ml-auto text-sm text-gray-500">
                        <i class="fas fa-users"></i> ({{ $course->students_count }})
                    </p>
                </div>
                <a href="{{ route('courses.show', $course) }}" class="block w-full px-4 py-2 mt-2 font-bold text-center text-white bg-blue-500 rounded hover:bg-blue-700">
                    Más información
                </a>
            </div>
        </article>
        @endforeach
    </div>
    <div class="px-4 mx-auto mt-4 mb-8 max-w-7xl sm:px-6 lg:px-8">
        {{ $courses->links() }}
    </div>
</div>
