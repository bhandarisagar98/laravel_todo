@extends('layouts.master')

@section('content')
<style>
    .c-table-wrapper {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table {
        margin-top: 1px;
        padding: 10px;
        border-collapse: collapse;
        width: 100%;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 10px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #dddddd;
    }

    .action-buttons {
        display: inline-block;
        margin-right: 5px;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .action-buttons:hover {
        background-color: #0056b3;
        text-decoration: none;
    }
</style>
<div class="c-table-wrapper">
    <table>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Todo</th>
                <th>Description</th>
                <th>Monetary Value</th>
                <th>Success Probability</th>
                <th>Priority</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $key => $todo)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$todo->todo}}</td>
                <td>{{$todo->description}}</td>
                <td>{{$todo->monetary_value}}</td>
                <td>{{$todo->success_probability}}</td>
                <td>{{$todo->priority}}</td>
                <td>{{$todo->created_at}}</td>
                <td>{{$todo->updated_at}}</td>
                <td>
                    <a href="{{route('edittodo',$todo->id)}}" class="action-buttons">Edit</a>
                    <a href="{{route('deletetodo',$todo->id)}}" class="action-buttons">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection