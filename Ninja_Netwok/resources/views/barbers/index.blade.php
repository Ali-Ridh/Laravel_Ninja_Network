<x-layout>
    @vite('resources/css/app.css')
    <h2>Check out our barbers</h2>
    <p></p>
        <ul>
        @foreach ($Barbers as $barber)
            <li>
                <x-card href="/Barbers/{{ $barber['id'] }}" :highlight="$barber['Age'] == 40">
                <h3>{{ $barber['Name'] }}</h3>
                <x-slot name="linkText">View Profile</x-slot>
                </x-card>
            </li>   
        @endforeach
        </ul>
    </p>
</x-layout>