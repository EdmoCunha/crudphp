<form action="{{ url(path: 'pokemons') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Create Pokemon</button>
</form>