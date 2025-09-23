<x-layout>
    @vite('resources/css/app.css')
    <h2>Check out our barbers</h2>
    <p></p>
        <ul>
        @foreach($barbers as $barber)
            <li><a href="{{ route('barbers.show', $barber->id) }}">{{ $barber->Name }}</a></li>
        @endforeach
        </ul>
    <p>{{ $barbers->links() }}</p>
</x-layout>