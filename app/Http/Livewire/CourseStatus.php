<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseStatus extends Component
{
    public $course, $current;

    public function mount(Course $course)
    {
        $this->course = $course;
        foreach ($course->lessons as $lesson) {
            if (!$lesson->completed) {
                $this->current = $lesson;
                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.course-status');
    }

    public function changeLesson(Lesson $lesson)
    {
        $this->current = $lesson;
    }

    //NOTE propiedades computadas
    public function getIndexProperty()
    {
        //NOTE pluck solo trae la colección de solo id
        //return $this->course->lesson->pluck('id')->search($this->current->id);
    }

    public function getPreviousProperty()
    {
        if ($this->index == 0) {
            return null;
        } else {
            return $this->course->lessons[$this->index - 1];
        }
    }

    public function getNextProperty()
    {
        // if ($this->index == $this->course->lesson->count() - 1) {
        //     return null;
        // } else {
        return $this->course->lessons[$this->index + 1];
        //}
    }
}
