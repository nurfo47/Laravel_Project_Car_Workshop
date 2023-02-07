<x-app-layout>
    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_new" class="m-1 p-1 mx-auto text-xl shadow-md sm:rounded-lg overflow-hidden bg-white hover:bg-blue-200">ZAPRIMI AUTOMOBIL</a>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">AUTA</h1><hr>
                    @foreach($cars_in_lines as $cars_in_line)
                    
                        <p class="p-2">{{$loop->iteration}}. {{$cars_in_line->fname}} {{$cars_in_line->lname}} - {{$cars_in_line->bname}} - {{$cars_in_line->name}} - {{$cars_in_line->model}} - {{$cars_in_line->year}}</p>
                
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
</x-app-layout>
