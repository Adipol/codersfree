<div class="card" x-data="{ open: false }">
    <div class="bg-gray-100 card-body">
        <header>
            <h1 x-on:click="open= !open" class="cursor-pointer">Recursos de la lección</h1>
        </header>
        <div x-show="open">
            <hr class="my-2">

            @if($lesson->resource)
            <div class="flex justify-between item-center">
                <p><i wire:click="download" class="mr-2 text-blue-500 cursor-pointer fas fa-download"></i>{{ $lesson->resource->url }}</p>
                <i wire:click="destroy" class="text-red-500 cursor-pointer color-blue-500 fas fa-trash"></i>
            </div>
            @else

            <form wire:submit.prevent="save">
                <div class="flex items-center">
                    <input wire:model="file" type="file" class="flex-1 form-input">
                    <button type="submit" class="ml-2 text-sm btn btn-primary">Guardar</button>
                </div>

                <div class="mt-1 font-bold text-blue-500" wire:loading wire:target="file">
                    Cargando...
                </div>

                @error('file')

                <span class="text-xs text-red-500">{{ $message }}</span>

                @enderror

            </form>
            @endif

        </div>
    </div>
</div>
