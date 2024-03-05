@extends('layouts.master')
@section('content')
<form action="/create" method="post">
    @csrf

    <label for="todo">Todo:</label>
    <input type="text" name="todo">
    <br><br>

    <label for="description">Todo Description:</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <br><br>

    <label for="monetary_value">Monetary Value:</label>
    <input type="text" name="monetary_value">
    <br><br>

    <label for="success_probability">Success Probability:</label>
    <select name="success_probability" id="success_probability">
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
    </select>
    <br><br>

    <label for="priority">Priority:</label>
    <select name="priority" id="priority">
        <option value="High">High</option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
    </select>
    <br><br>

    <button type="submit">Create Todo</button>
</form>
@endsection