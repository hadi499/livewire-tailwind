<!-- resources/views/livewire/register-form.blade.php -->
<div class="bg-blue-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8 ">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-6">Create a Post</h2>

        <!-- Form Start -->
        <form wire:submit.prevent="save">
            <!-- Name -->
            <div class="mb-4">
                <label for="title" class="block text-blue-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" wire:model="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>




            <div wire:ignore class="mb-4">
                <label for="body" class="block text-blue-700 font-semibold mb-2">Body</label>
                <div x-data x-ref="editor" x-init="
                const quill = new Quill($refs.editor, {
                    theme: 'snow'
                });
                quill.on('text-change', ()=>{
                    $wire.set('body', quill.root.innerHTML)
                })
                ">

                </div>

                @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>



            <!-- Submit Button -->
            <div class="flex gap-4 justify-end ">
                <button wire:click="cancel" class=" px-4 py-2 rounded-lg hover:bg-gray-400 focus:outline-none">
                    Cancel
                </button>
                <button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save
                </button>
            </div>
        </form>
        <!-- Form End -->
    </div>
</div>