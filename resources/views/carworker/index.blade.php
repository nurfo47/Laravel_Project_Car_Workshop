<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">Automobili koji su zaprimljeni i kod kojeg radnika</h1><hr>
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                
                    @foreach($worker_get_cars as $worker_get_car)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md w-11/12">
                        <p class="p-1 font-bold text-xl">{{$loop->iteration}}.</p>
                        <p class="p-1"><b>Radnik:</b> {{$worker_get_car->uname}}</p>
                        <p class="p-1"><b>Naziv:</b> {{$worker_get_car->cname}} {{$worker_get_car->model}}</p>
                        <p class="p-1"><b>Datum:</b> {{$worker_get_car->date}}</p>
                        
                        </div>
                        
                    @endforeach
                    </div>
                </div>
                <hr>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">Broj automobila koje je zaprimio svaki radnik</h1><hr>
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                
                    @foreach($worker_mosts as $worker_most)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md w-11/12">
                        <p class="p-1 font-bold text-xl">{{$loop->iteration}}.</p>
                        <p class="p-1"><b>Radnik:</b> {{$worker_most->name}}</p>
                        <p class="p-1"><b>Kolicina:</b> {{$worker_most->brojac}}</p>
                        
                        </div>
                        
                    @endforeach
                    </div>
                </div>
                <hr>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="text-xl p-2">Ispis računa svih klijenata koji trebaju platiti i kod kojeg radnika</h1><hr>
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                
                    @foreach($customer_payments as $customer_payment)
                        <div class="bg-gray-100 sm:rounded-lg shadow-md w-11/12">
                        <p class="p-1 font-bold text-xl">{{$loop->iteration}}.</p>
                        <p class="p-1"><b>Ime:</b> {{$customer_payment->fname}}</p>
                        <p class="p-1"><b>Prezime:</b> {{$customer_payment->lname}}</p>
                        <p class="p-1"><b>Radnik:</b> {{$customer_payment->uname}}</p>
                        <p class="p-1"><b>Ukupna cijena:</b> {{$customer_payment->total}} KM</p>
                        <p class="p-1"><b>Datum:</b> {{$customer_payment->date}}</p>
                        
                        
                        </div>
                        
                    @endforeach
                    </div>
                </div>
                <hr>
                
            </div>
        </div>
</x-app-layout>
