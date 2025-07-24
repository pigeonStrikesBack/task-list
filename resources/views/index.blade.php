@extends('layouts.app')

@section('title', "Tasks")

@section('content')
@forelse ($tasks as $task)
<div>
    <a href="{{ route('tasks.show', [
    'id' => $task->id
    ])}}">{{$task->title}}</a>
</div>
@empty
<h3>There's no tasks!</h3>
@endforelse
@endsection
