@extends('layout.app')
@section('title' ,  The list of tasks )

@section('content')
    {{-- @if (count($tasks)) --}}
     @forelse ($tasks as $task)
         <div>
            <a href="{{route('task.show' , ['id' => $task->id])}}">{{$task->title}}</a>
         </div>
     @empty
         <div>There is no task</div>
     @endforelse    
   
    {{-- @endif --}}
@endsection