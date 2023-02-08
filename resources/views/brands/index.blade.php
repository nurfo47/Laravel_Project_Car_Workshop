<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_brand" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">DODAJ BREND</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">DOSTUPNI DIJELOVI ZA SLJEDEĆE BRENDOVE</h1><hr>
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                
                    @foreach($brands as $brand)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md w-11/12 p-2">
                        <p class="p-1 text-xl text-upper">{{$brand->name}} </p>
                        
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>
