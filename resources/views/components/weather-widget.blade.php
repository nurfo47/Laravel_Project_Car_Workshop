<div class="bg-blue-100 items-center">
    <div class="relative items-center">
        <!------------------------------------------Prikaz trenutnog vremena-------------------------------------------->
        <div class="flex items-center justify-between px-24">
            <div class="flex items-center">
                <div>
                    <div class="text-5xl font-semibold">{{round($currentWeather['main']['temp'])}}&#176; C </div>
                    <div class="text-gray-500">Osjećaj kao {{round($currentWeather['main']['feels_like'])}}&#176; C </div>
                </div>
            <div class="ml-6">
                <div class="text-3xl font-semibold">{{ ucfirst($currentWeather['weather'][0]['description'])}}</div>
                <div class="text-gray-500">Bihać, Bosna i Hercegovina</div>
            </div>
        </div>
        <div><img src="http://openweathermap.org/img/wn/{{ $currentWeather ['weather'][0]['icon'] }}@4x.png" alt="icon"></div>
    </div>
</div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->

