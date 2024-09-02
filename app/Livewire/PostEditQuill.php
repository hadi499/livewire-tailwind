<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PostEditQuill extends Component
{
    public $title;
    public $body;
    public $post;

    public function cancel()
    {
        $this->redirect('/');
    }

    public function mount($id)
    {

        $this->post = Post::where('id', $id)->firstOrFail();
        $this->title = $this->post->title;
        $this->id = $this->post->id;
        $this->body = $this->post->body;
    }


    protected function rules()
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        return $rules;
    }

    public function update()
    {
        $validatedData = $this->validate();
        $this->post->update($validatedData);
        return redirect('/');
    }

    #[Layout('components.layouts.quill')]
    public function render()
    {
        return view('livewire.post-edit-quill');
    }
}
