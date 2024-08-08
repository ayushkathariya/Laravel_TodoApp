<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <form action="{{ route('todo.update', $todo->id) }}" method="POST" class="space-y-5">
                            @csrf
                            @method('PUT')
                            <div>
                                <label class="font-medium"> Title </label>
                                <input type="text" name="title" value="{{ $todo->title }}"
                                    class="w-full px-3 py-2 mt-2 text-gray-500 bg-transparent border rounded-lg shadow-sm outline-none focus:border-indigo-600" />
                            </div>
                            @error('title')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            <button
                                class="w-full px-4 py-2 font-medium text-white duration-150 bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-600">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
