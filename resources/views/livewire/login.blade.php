<!-- resources/views/livewire/login-form.blade.php -->
<div class="bg-blue-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-6">Login to Your Account</h2>

        <form wire:submit.prevent="login">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-blue-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" wire:model="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-blue-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" wire:model="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>