<form method="post" action="/submit">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>
    @error('name')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
    @error('email')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required>{{ old('message') }}</textarea><br>
    @error('message')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <button type="submit">Submit</button>
</form>
