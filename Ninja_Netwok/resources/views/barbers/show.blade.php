<x-layout> 
    @vite('resources/css/app.css')

    <h2>Barber Profile</h2>
    <h3>{{ $barber->Name }}</h3>
    <p>Job: {{ $barber->Job }}</p>
    <p>Age: {{ $barber->Age }}</p>
</x-layout>
