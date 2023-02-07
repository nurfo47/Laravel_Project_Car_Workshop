<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="\add_brand" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">Dodaj brend</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">PROIZVOĐAČI</h1><hr>
                    @foreach($brands as $brand)
                    
                        <p class="p-1">{{$brand->name}}</p>
                
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>