<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{--                    <div class="mt-8 grid grid-cols-5" >
                    @foreach($books as $book)
                        </div>
                    @endforeach
                </div>--}}
                    <div class="card">

                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
