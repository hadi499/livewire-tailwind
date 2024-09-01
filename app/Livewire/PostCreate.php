<?php

namespace App\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $content;

    public function cancel()
    {
        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
