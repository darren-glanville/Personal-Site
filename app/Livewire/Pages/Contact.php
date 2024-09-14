<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Contact extends Component
{
    #[Title('Get in touch')]
    public function render()
    {
        return view('livewire.pages.contact');
    }
}
