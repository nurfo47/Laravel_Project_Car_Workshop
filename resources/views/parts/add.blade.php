<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DODAVANJE DIJELA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form method="POST" action="{{ route('store_part') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="pname" value="{{ __('Naziv') }}" />
                <x-jet-input id="pname" class="block mt-1 w-full" type="text" name="pname" :value="old('pname')" required autofocus autocomplete="pname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Cijena') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="price" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="mt-4">
                {{ __('Spremi') }}
</x-jet-button>
</div>
</form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
