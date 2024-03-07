@extends('layouts.master')
@section('content')

<div>
    <h2>Forget Password</h2>

    <form action="">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="security_question" name="security_question">Security Question</label>:
        <input type="text" name="security_answer">
        <button type="submit">Set New Password</button>
    </form>
</div>

@endsection