<div>
    <article class="card" x-data="{open: false}">
        <div class="bg-gray-100 card-body">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer">Descripción de la lección</h1>
            </header>
            <div x-show="open">
                <hr class="my-2">

                @if($lesson->description)
                <form wire:submit.prevent="update">
                    <textarea wire.model="description.name" class="w-full form-input" placeholder="Agregue una descripción de la lección"></textarea>

                    @error('description.name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex justify-end">
                        <button wire:click="destroy" class="text-sm btn btn-danger" type="button">Eliminar</button>
                        <button class="ml-2 text-sm btn btn-primary" type="submit">Actualizar</button>
                    </div>

                </form>
                @else
                <div>
                    <textarea wire:model="name" class="w-full form-input" placeholder="Agregue una descripción de la lección"></textarea>

                    @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex justify-end">
                        <button wire:click="store" class="ml-2 text-sm btn btn-primary">Agregar</button>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </article>
</div>
