<h1>
    The list of tasks
</h1>

<div>
    @if (count($tasks))
      @foreach ($tasks as $task)
          <div>{{$task->title}}</div>
      @endforeach    
    @else
        There are no task avlabile
    @endif
</div>