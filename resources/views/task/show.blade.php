<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.tasks.show.title') . ": {$task->name}" }}
            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-400 dark:text-blue-400">⚙</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.name') . ": "}}</span>
                        {{ $task->name }}
                    </p>
                    <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.status') . ": "}}</span>
                        {{ $task->status->name }}
                    </p>
                    <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.description') . ": "}}</span>
                        {{ $task->description }}
                    </p>
                    <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.labels') . ": "}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
