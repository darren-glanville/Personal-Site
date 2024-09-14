<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Projects extends Component
{
    #[Title('My projects')]
    public function render()
    {
        return view('livewire.pages.projects');
    }
}
