<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('user.books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-label for="title" :value="__('Title*')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('name')"
                                     required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="authors" :value="__('Authors (separated by comma)*')" />

                            <x-input id="authors" class="block mt-1 w-full" type="text" name="authors" :value="old('name')"
                                     required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="genres" :value="__('Genres*')" />

                            @foreach($genres as $genre)
                                <input type="checkbox" name="genres[]" value="{{ $genre->id }}" />
                                {{ $genre->name }}
                                <br />
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <x-label for="price" :value="__('Price*')" />

                            <x-input id="price" class="block mt-1 w-full" type="number" name="price" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="cover" :value="__('Cover Photo')" />

                            <input type="file" ig="cover" name="cover" />
                        </div>

                        <div class="flex items-center mt-4">
                            <x-button>
                                {{ __('Save Book') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
