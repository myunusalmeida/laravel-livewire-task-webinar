<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TaskCreate extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $priority = '';

    public function save()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'priority' => $this->priority
        ]);

        session()->flash('status', 'Task berhasil dibuat.');
        return $this->redirectRoute('task', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.task-create');
    }
}
