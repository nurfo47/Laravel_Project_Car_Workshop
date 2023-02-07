<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">AUTA</h1><hr>
                    @foreach($cars as $car)
                    
                        <p class="p-2">{{$car->name}} {{$car->model}} {{$car->year}} {{$car->motor_type}}</p></div>
                
                    @endforeach
                </div>
                
            </div>
        </div>
</x-app-layout>
