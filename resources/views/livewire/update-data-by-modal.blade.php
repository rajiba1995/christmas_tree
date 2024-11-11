<div x-data="{ open: false }" x-show="open" @open-update-modal.window="open = true" @close-update-modal.window="open = false">
    <div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
        <div class="bg-white rounded-lg shadow-xl w-1/3 p-6">
            <h2 class="text-lg font-semibold mb-4">Update Record</h2>

            <form wire:submit.prevent="update">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="flex justify-end">
                    <button type="button" @click="open = false" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
