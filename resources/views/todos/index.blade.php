@extends('layouts.master')

@section('content')
<div>
    <table border="3">
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
                    <a href="{{route('edittodo',$todo->id)}}">Edit</a>
                    <a href="{{route('deletetodo',$todo->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection