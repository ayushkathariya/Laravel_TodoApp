@extends('layouts.layout')

@section('title')
    Todo Application
@endsection

@section('content')
    <section>
        <div class="max-w-screen-xl mx-auto px-4 py-28 gap-12 text-gray-600 md:px-8">
            <div class="space-y-5 max-w-4xl mx-auto text-center">
                <h1 class="text-sm text-indigo-600 font-medium">
                    Stay organized and productive
                </h1>
                <h2 class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl">
                    Manage your tasks effortlessly with <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#4F46E5] to-[#E114E5]">our intuitive todo
                        application</span>
                </h2>
                <p class="max-w-2xl mx-auto">
                    Simplify your life by keeping track of your tasks and deadlines. Our app helps you stay on top of your
                    goals
                    with ease and efficiency.
                </p>
                <div class="items-center justify-center gap-x-3 space-y-3 sm:flex sm:space-y-0">
                    <a href="{{ route('dashboard') }}"
                        class="block py-2 px-4 text-white font-medium bg-indigo-600 duration-150 hover:bg-indigo-500 active:bg-indigo-700 rounded-lg shadow-lg hover:shadow-none">
                        Get Started
                    </a>
                    <a href="javascript:void(0)"
                        class="block py-2 px-4 text-gray-700 hover:text-gray-500 font-medium duration-150 active:bg-gray-100 border rounded-lg">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
