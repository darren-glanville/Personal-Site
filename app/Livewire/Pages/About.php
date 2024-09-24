<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class About extends Component
{
    #[Title('About me')]
    public function render()
    {
        return view('livewire.pages.about');
    }
}
