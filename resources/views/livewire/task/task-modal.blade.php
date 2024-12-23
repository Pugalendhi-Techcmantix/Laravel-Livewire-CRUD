<div class="relative">
    <!-- Header Section -->
    <div class="bg-slate-100 p-5 flex justify-between items-center h-16"> <!-- Set height here -->
        <p class="font-bold text-lg uppercase">Task</p>
        <button class="text-gray-600 hover:text-gray-900"
            wire:click="$dispatch('closeModal', { component: 'task.task-modal' })">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <x-mary-form wire:submit.prevent="save" class="p-5">
        @csrf
        <x-mary-input label="Porject Name" wire:model="form.project_name" placeholder="Enter Project name" />
        <x-mary-input label="Area" wire:model="form.area" placeholder="Enter Area"  />
        <x-mary-textarea label="Task Name" wire:model="form.task_name" placeholder="Enter Task "  />
        <x-slot:actions>
            <x-mary-button type="button" wire:click="$dispatch('closeModal', { component: 'task.task-modal' })">
                Cancel
            </x-mary-button>
            <x-mary-button class="btn-primary" type="submit">
                {{-- {{ $form->task_id ? 'Update' : 'Save' }} --}}
                Save
            </x-mary-button>
        </x-slot:actions>
    </x-mary-form>
    <div class="flex justify-end items-center h-full space-x-2"> <!-- Use h-full for alignment -->

    </div>

</div>
