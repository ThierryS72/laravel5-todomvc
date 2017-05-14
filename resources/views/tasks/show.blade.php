@extends('layout')

@section('content')
    <h2>Task #{{ $task->id }}</h2>
    
    <ul>
        <li>Name : {{ $task->name }}</li>
    </ul>
    
    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
@endsection