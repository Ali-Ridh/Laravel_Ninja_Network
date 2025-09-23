<x-layout>
    <h1>Create a New Barber</h1>
    <form method="POST" action="/Barbers">
        @csrf
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required>
        <br>
        <label for="Job">Job:</label>
        <input type="text" id="Job" name="Job" required>
        <br>
        <label for="Age">Age:</label>
        <input type="number" id="Age" name="Age" required>
        <br>
        <button type="submit">Add Barber</button>
    </form>
</x-layout>