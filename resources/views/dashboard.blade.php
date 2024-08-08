<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('status'))
            <div class="fixed bottom-3 left-[40%]">
                <div class="flex w-[23rem] overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-center w-16 bg-emerald-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                        </svg>
                    </div>

                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                            <p class="text-sm text-gray-600 dark:text-gray-200">{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4">
                @if ($todos)
                    @foreach ($todos as $todo)
                        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p>{{ $todo->title }}</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <a href="{{ route('todo.edit', $todo->id) }}"
                                            class="block px-4 py-2 font-medium text-white duration-150 bg-yellow-600 rounded-lg shadow-lg hover:bg-yellow-500 active:bg-indigo-700 hover:shadow-none">Edit</a>
                                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input value="Delete" type="submit"
                                                class="block px-4 py-2 font-medium text-white duration-150 bg-red-600 rounded-lg shadow-lg cursor-pointer hover:bg-red-500 active:bg-indigo-700 hover:shadow-none">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                @endif
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
