extends('layouts.master')

@section('content')
<form action="">
    <h2>Login to Simple Todo</h2>
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="">Password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
@endsection