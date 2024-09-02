<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PostQuill extends Component
{
    public $title;
    public $body;

    public function cancel()
    {
        $this->redirect('/');
    }


    protected $rules = [
        'title' => 'required',
        'body' => 'required',

    ];

    public function save()
    {

        $validatedData = $this->validate();
        Post::create($validatedData);
        return redirect('/');
    }

    #[Layout('components.layouts.quill')]
    public function render()
    {
        return view('livewire.post-quill');
    }
}
