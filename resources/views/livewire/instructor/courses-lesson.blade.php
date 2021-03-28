<div>
    @foreach ($section->lessons as $item)
    <article class="mt-4 card">
        <div class="card-body">

            @if($lesson->id == $item->id)

            <form wire:submit.prevent="update">
                <div class="flex item-center">
                    <label class="w-32">Nombre: </label>
                    <input wire:model="lesson.name" class="w-full form-input">
                </div>
                @error('lesson.name')
                <spam class="text-xs text-red-500">{{ $message }}</spam>
                @enderror

                <div class="flex items-center mt-4">
                    <label class="w-32">Plataforma: </label>
                    <select wire:model="lesson.platform" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex mt-4 item-center">
                    <label class="w-32">URL: </label>
                    <input wire:model="lesson.url" class="w-full form-input">
                </div>
                @error('lesson.url')
                <spam class="text-xs text-red-500">{{ $message }}</spam>
                @enderror

                <div>
                    <button type="button" class="btn btn-danger" wire:click="cancel">Cancelar</button>
                    <button type="submit" class="ml-2 btn btn-primary">Actualizar</button>
                </div>
            </form>

            @else

            <header>
                <h1><i class="mr-1 text-blue-500 far fa-play-circle"></i>Lección: {{ $item->name }}</h1>
            </header>

            <div>
                <hr class="my-2">
                <p class="text-sm">Plataforma: {{ $item->platform->name }}</p>
                <p class="text-sm">Enlace: <a class="text-blue-600" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>

                <div class="my-2">
                    <button class="text-sm btn btn-primary" wire:click="edit({{ $item }})">Editar</button>
                    <button class="text-sm btn btn-danger" wire:click="destroy({{ $item }})">Eliminar</button>
                </div>
                <div>
                    @livewire('instructor.lesson-description',['lesson'=>$item], key($item->id))
                </div>
            </div>
            @endif

        </div>
    </article>
    @endforeach

    <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click="open=true" class="flex items-center cursor-pointer">
            <i class="mr-2 text-2xl text-red-500 far fa-plus-square">
            </i>
            Agregar una lección
        </a>
        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="mb-4 text-xl font-bold">Agregar nueva lección</h1>
                <div class="mb-4">
                    <div class="flex item-center">
                        <label class="w-32">Nombre: </label>
                        <input wire:model="name" class="w-full form-input">
                    </div>
                    @error('name')
                    <spam class="text-xs text-red-500">{{ $message }}</spam>
                    @enderror

                    <div class="flex items-center mt-4">
                        <label class="w-32">Plataforma: </label>
                        <select wire:model="platform_id" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach ($platforms as $platform)
                            <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('platform_id')
                    <spam class="text-xs text-red-500">{{ $message }}</spam>
                    @enderror

                    <div class="flex mt-4 item-center">
                        <label class="w-32">URL: </label>
                        <input wire:model="url" class="w-full form-input">
                    </div>
                    @error('url')
                    <spam class="text-xs text-red-500">{{ $message }}</spam>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button class="btn btn-danger" x-on:click="open=false">Cancelar</button>
                    <button class="ml-2 btn btn-primary" wire:click="store">Agregar</button>
                </div>
            </div>
        </article>
    </div>

</div>
