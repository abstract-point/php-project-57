<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Статусы') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-4">
                <x-link-button href="{{ route('task_statuses.create') }}">
                    {{ __('Создать статус') }}
                </x-link-button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white dark:bg-gray-800 text-sm ">
                            <thead class="text-left">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">ID</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">Имя</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">Дата создания</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">Действия</th>
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 text-left">
                            @forelse ($statuses as $status)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ $status->id }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">{{ $status->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">{{ $status->created_at }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">
                                        <a href="{{ route('task_statuses.edit', $status) }}" class="text-blue-400 dark:text-blue-400">Изменить</a>
                                        <a href="{{ route('task_statuses.destroy', $status) }}" class="text-red-400 dark:text-red-400">Удалить</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>