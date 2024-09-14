<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('Welcome')]
    public function render()
    {
        return view('livewire.pages.home');
    }
}
