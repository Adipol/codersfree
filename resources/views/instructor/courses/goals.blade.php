<x-instructor-layout>
    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>
    <div>
        @livewire('instructor.courses-goals',['course'=>$course], key('courses-goals' . $course->id))
    </div>
    <div class="my-8">
        @livewire('instructor.courses-requirements',['course'=>$course], key('courses-requirement' . $course->id))
    </div>
    <div class="my-8">
        @livewire('instructor.courses-audiences',['course'=>$course], key('courses-audiences' . $course->id))
    </div>
</x-instructor-layout>
