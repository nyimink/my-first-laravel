@extends('layouts.main')

@section('content')
<form action="/create-banana" method="post">
        @csrf
        Name: <input type="text" name="title" required>
        Color: <input type="color" name="color" required>
        <button class="title" type="submit">Save</button>
</form>
@endsection