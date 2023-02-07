<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zaprimanje automobila') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form method="POST" action="{{ route('store_new') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="fname" value="{{ __('Ime vlasnika') }}" />
                <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="lname" value="{{ __('Prezime vlasnika') }}" />
                <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Naziv automobila') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="model" value="{{ __('Model') }}" />
                <x-jet-input id="model" class="block mt-1 w-full" type="text"  name="model" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="motor_type" value="{{ __('Tip motora') }}" />
                <x-jet-input id="motor_type" class="block mt-1 w-full" type="text"  name="motor_type" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="year" value="{{ __('Godiste') }}" />
                <x-jet-input id="year" class="block mt-1 w-full" type="number"  name="year" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="brand" value="{{ __('Brend') }}" />
                <select name="brand" id="brand" class="form-select block w-full mt1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                rounded-md shadow-sm">
                    <option selected="true" disabled="disabled">Odaberi</option>

                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="date" value="{{ __('Datum zaprimanja') }}" />
                <x-jet-input id="date" class="block mt-1 w-full" type="date"  name="date" required autofocus />
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
