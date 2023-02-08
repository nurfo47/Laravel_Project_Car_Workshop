<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_part" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">Dodaj novi</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">DIJELOVI NA STANJU</h1><hr>
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                
                    @foreach($parts as $part)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md">
                        
                        <p class="p-1"><b>Naziv:</b> {{$part->pname}}</p>
                        <p class="p-1"><b>Cijena:</b> {{$part->price}}KM</p>
                        
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>
