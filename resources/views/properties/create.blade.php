<h1>Add Property</h1>

<form action="{{ route('properties.store') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name"><br><br>

    <label>Location:</label>
    <input type="text" name="location"><br><br>

    <button type="submit">Save</button>
</form>