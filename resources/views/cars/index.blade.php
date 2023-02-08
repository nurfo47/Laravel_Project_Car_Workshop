<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_new" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">ZAPRIMI AUTOMOBIL</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">

                    @foreach($cars_in_lines as $cars_in_line)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md">
                        <p class="p-1 font-bold text-xl">{{$loop->iteration}}.</p>
                        <p class="p-1"><b>Vlasnik:</b> {{$cars_in_line->fname}} {{$cars_in_line->lname}}</p>
                        <p class="p-1"><b>Brend:</b> {{$cars_in_line->bname}}</p>
                        <p class="p-1"><b>Naziv:</b> {{$cars_in_line->name}} {{$cars_in_line->model}}</p>
                        <p class="p-1"><b>Godina:</b> {{$cars_in_line->year}}</p>
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>
