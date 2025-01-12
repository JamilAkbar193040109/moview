<footer class="bg-modern-primary py-4">
  <div class="mx-auto flex max-w-6xl flex-row items-center justify-between">
    <div class="flex items-center justify-between">
      @php
        $weather = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Bandung&appid=52f549113ce007dfc6e3455453a43e48&units=metric')->json();
      @endphp

      <div class="flex items-center">
        <img src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" alt="Weather Icon">
        <div class="ml-2 text-sm">
          <p class="font-semibold text-modern-accent">{{ $weather['name'] }}</p>
          <p class="text-gray-100">{{ $weather['main']['temp'] }}°C ({{ $weather['weather'][0]['description'] }})</p>
        </div>
      </div>
    </div>
    <p class="text-center text-white">&copy; 2024 Moview. All rights reserved.</p>
  </div>
</footer>
