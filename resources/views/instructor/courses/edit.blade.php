<x-app-layout>
    <div class="container grid grid-cols-5 py-5">
        <aside>
            <h1 class="mb-4 text-lg font-bold">Edición del curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="pl-2 mb-1 leading-7 border-l-4 border-indigo-400">
                    <a href="">Información del curso</a>
                </li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent">
                    <a href="">Lección del curso</a>
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
            <div class="card-body">
                <h1 class="text-2xl font-bold">INFORMACIÓN DEL CURSO</h1>
                <hr class="mt-2 mb-6">
                {!! Form::model($course, ['route'=>['instructor.courses.update',$course], 'method'=>'put', 'files'=>true]) !!}

                @include('instructor.courses.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar información', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/course/form.js') }}">


        </script>
    </x-slot>

</x-app-layout>
