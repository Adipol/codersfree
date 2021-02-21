<div class="mt-8">
    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="embed-responsive">
                {!! $current->iframe !!}
            </div>
            <h1 class="mt-4 text-3xl font-bold text-gray-600">
                {{ $current->name }}
            </h1>
            @if($current->description)
            <div class="text-gray-600">
                {{ $current->description->name }}
            </div>
            @endif
            <div class="flex items-center mt-4 cursor-pointer">
                <i class="text-2xl text-gray-600 fas fa-toggle-off"></i>
                <p class="ml-2 text-sm">Marcar esta unidad como culminada</p>
            </div>

            <div class="mt-2 card">
                <div class="flex font-bold text-gray-500 card-bold">
                    @if($this->previous)
                    <a wire:click="changeLesson({{ $this->previous }})" class="cursor-pointer">Tema anterior</a>
                    @endif
                    @if($this->next)
                    <a wire:click="changeLesson({{ $this->next }})" class="ml-auto cursor-pointer">Siguiente tema</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-2xl leading-8 text-center">{{ $course->title }}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="object-cover w-12 h-12 mr-4 rounded-full" src="{{ $course->teacher->profile_photo_url }}" alt="">
                    </figure>
                    <div>
                        <p>{{ $course->teacher->name }}</p>
                        <a href="" class="text-sm text-blue-500">{{ '@' . Str::slug($course->teacher->name,'') }}</a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-gray-600">20# Completado</p>
                <div class="relative pt-1">
                    <div class="flex h-2 mb-4 overflow-hidden text-xs bg-gray-200 rounded">
                        <div style="width:30%" class="flex flex-col justify-center text-center text-white bg-blue-500 shadow-none whitespace-nowrap"></div>
                    </div>
                </div>
                <ul>
                    @foreach($course->sections as $section)
                    <li class="mb-4 text-gray-600">
                        {{-- Se debe tomar en cuenta que en etiquetas a no funciona mb por eso se coloca inline-bloc --}}
                        <a class="inline-block mb-2 text-base font-bold" href="">{{ $section->name }}</a>
                        <ul>
                            @foreach($section->lessons as $lesson)
                            <li class="flex">
                                <div>
                                    @if($lesson->completed)

                                    @if($current->id==$lesson->id)

                                    <span class="inline-block w-4 h-4 mt-1 mr-2 border-2 border-yellow-300 rounded-full"></span>
                                    @else

                                    <span class="inline-block w-4 h-4 mt-1 mr-2 bg-yellow-300 rounded-full"></span>
                                    @endif

                                    @else
                                    @if($current->id==$lesson->id)
                                    <span class="inline-block w-4 h-4 mt-1 mr-2 border-2 border-gray-500 rounded-full"></span>
                                    @else
                                    <span class="inline-block w-4 h-4 mt-1 mr-2 bg-gray-500 rounded-full"></span>
                                    @endif
                                    @endif
                                </div>
                                <a class="cursor-pointer" wire:click="changeLesson({{ $lesson }})">{{ $lesson->name }}
                                    @if($lesson->completed)
                                    (Completado)
                                    @endif
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
