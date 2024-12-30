<div class="container mt-3">
    @if ($role == 2)
        <div class="mt-4 grid grid-cols-3 gap-5">
            @foreach ($myTasks as $index => $task)
                <x-mary-card class="p-4 shadow-lg" title="Task #{{ $index + 1 }}">
                    <x-slot:menu>
                        <div class="flex items-center">
                            <x-heroicon-o-exclamation-triangle class="w-6 h-6 text-yellow-500 mr-2" />
                            <span class="text-sm font-semibold text-yellow-500">Pending</span>
                        </div>
                        <x-mary-dropdown icon="o-pencil" class="btn-circle btn-ghost btn-sm">
                            <x-mary-menu-item title="Progress" icon="o-clock"
                                wire:click="openModal({{ $task->id }}, 2)" />
                            <x-mary-menu-item title="Hold" icon="o-pause-circle"
                                wire:click="openModal({{ $task->id }}, 3)" />
                        </x-mary-dropdown>
                    </x-slot:menu>
                    <div>
                        <div class="flex items-center">
                            <x-heroicon-o-briefcase class="w-5 h-5 text-gray-500 mr-2" />
                            <strong class="text-gray-700 dark:text-gray-200">Project:</strong> {{ $task->project_name }}
                        </div>
                        <div class="mt-2 flex items-center">
                            <x-heroicon-o-document-text class="w-5 h-5 text-gray-500 mr-2" />
                            <strong class="text-gray-700 dark:text-gray-200">Task Name:</strong> {{ $task->task_name }}
                        </div>
                        <div class="mt-2 flex items-center">
                            <x-heroicon-o-code-bracket-square class="w-5 h-5 text-gray-500 mr-2" />
                            <strong class="text-gray-700 dark:text-gray-200">Area:</strong> {{ $task->area }}
                        </div>
                        <div class="mt-2 flex items-center">
                            <x-heroicon-o-clock class="w-5 h-5 text-gray-500 mr-2" />
                            <strong class="text-blue-500">Assigned At:</strong>
                            {{ \Carbon\Carbon::parse($task->created_at)->format('d-m-Y') }}
                        </div>
                        <div class="mt-2 flex items-center">
                            <x-heroicon-o-clock class="w-5 h-5 text-gray-500 mr-2" />
                            <strong class=" text-red-500 ">Due Date:</strong>
                            {{ \Carbon\Carbon::parse($task->due_date)->format('d-m-Y') }}
                        </div>
                    </div>
                </x-mary-card>
            @endforeach
        </div>
    @endif

    <x-mary-modal wire:model="confirm" title="Are you sure?">
        <div>Click 'Confirm' to change Status.</div>
        <x-slot:actions>
            <x-mary-button label="{{ __('Cancel') }}" wire:click="$set('confirm', false)" spinner />
            <x-mary-button label="{{ __('Confirm') }}" wire:click="updateTaskStatus" class="btn-primary" spinner />
        </x-slot>
    </x-mary-modal>

</div>
