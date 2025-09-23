<x-layout>
    @vite('resources/css/app.css')
    @if($barber['id'] == 1)
        <p>This is Mario, our master barber!</p>
    @endif
    <h1>{{ $barber['Name'] }}</h1>
    <p>Job: {{ $barber['Job'] }}</p>
    <p>Age: {{ $barber['Age'] }}</p>
</x-layout>