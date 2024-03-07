@extends('layouts.master')
@section('content')

<style>
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    select {
        height: 40px;
        /* Ensures consistency with input elements */
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="c-form-wrapper">
    <form action="{{ url('/update/' . $todos->id) }}" method="post">
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
</div>
@endsection