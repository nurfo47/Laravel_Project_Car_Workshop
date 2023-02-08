<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_part" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">Dodaj novi</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">DIJELOVI NA STANJU</h1><hr>
                <div class="grid grid-cols-4 gap-12 p-6 justify-items-center">
                
                    @foreach($parts as $part)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md w-11/12">
                        
                        <p class="p-1"><b>Naziv:</b> {{$part->pname}}</p>
                        <p class="p-1"><b>Cijena:</b> {{$part->price}}KM</p>

                        <!--*****************************EDIT PART BUTTON*************************************-->
                        <div class="grid grid-cols-2 flex-2">
                        <form method="POST" action="{{ route('edit_part')}}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$part->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-800 border-transparent
                                rounded-md font-semibold text-xs text-white uppercase ml-4">
                                {{ __('Uredi') }}
                                </button>
                            </div>
                        </form>
                    
                        <!--*****************************DELETE PART BUTTON*************************************-->
                        
                        <form method="POST" action="{{ route('delete_part')}}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$part->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-800 border-transparent
                                rounded-md font-semibold text-xs text-white uppercase ml-4">
                                {{ __('Obrisi') }}
                                </button>
                            </div>
                        </form>
                    </div>
                        
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>
