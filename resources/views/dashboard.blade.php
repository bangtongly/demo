<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class=""><a href="{{ route('tab_bar') }}">tap bar</a></button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class=""><a href="{{ route('start') }}">start</a></button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class=""><a href="{{ route('lamp') }}">Lamp</a></button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <button class=""><a href="{{ route('test') }}">Post</a></button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
