@extends('layouts.master')
@section('content')
<form action="/create" method="post">
    @csrf

    <label for="todo">Todo:</label>
    <input type="text" name="todo" value="{{$todos->todo}}">
    <br><br>

    <label for="description">Todo Description:</label>
    <textarea name="description" id="description" cols="30" rows="10">{{$todos->description}}</textarea>
    <br><br>

    <label for="monetary_value">Monetary Value:</label>
    <input type="text" name="monetary_value" value="{{$todos->monetary_value}}">
    <br><br>

    <label for="success_probability">Success Probability:</label>
    <select name="success_probability" id="success_probability">
        <option value="High" {{ $todos->success_probability == 'High' ? 'selected' : '' }}>High</option>
        <option value="Medium" {{ $todos->success_probability == 'Medium' ? 'selected' : '' }}>Medium</option>
        <option value="Low" {{ $todos->success_probability == 'Low' ? 'selected' : '' }}>Low</option>
    </select>
    <br><br>

    <label for="priority">Priority:</label>
    <select name="priority" id="priority">
        <option value="High" {{ $todos->priority == 'High' ? 'selected' : '' }}>High</option>
        <option value="Medium" {{ $todos->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
        <option value="Low" {{ $todos->priority == 'Low' ? 'selected' : '' }}>Low</option>
    </select>
    <br><br>

    <button type="submit">Update Todo</button>
</form>
@endsection