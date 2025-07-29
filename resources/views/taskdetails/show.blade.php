<h1>ID #{{$task->id}}, {{$task->title}}</h1>
<p>Task details:</p>
<p>Description: {{$task->description}}</p>
@if($task->long_description)
    <p>{{$task->long_description}}</p> 
@endif
<p>Status: {{$task->completed ? 'Completed' : 'Not completed'}}</p>
<small>Created at {{$task->created_at}}</small><br>
<small>Updated at {{$task->updated_at}}</small>
