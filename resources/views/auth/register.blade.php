extends('layouts.master')

@section('content')
<form action="/register">
    <h2>Register to Simple Todo</h2>
    <label for="name">Your Name</label>
    <input type="text" name="name_oftheuser">
    <label for="email">Email</label>
    <input type="text" name="email">
    <label for="">Password</label>
    <input type="password" name="password">
    <select name="security_question" id="">
        <option value="what_is_your_favorite_movie?">What is your favorite movie?</option>
        <option value="what_is_your_favorite_food?">What is your favorite food?</option>
    </select>
    <label for="security_answer">security_answer</label>
    <input type="text" name="security_answer">
    <button type="submit">Login</button>
</form>
@endsection