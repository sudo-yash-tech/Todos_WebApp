@extends('layouts')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <form action="/create/todo" method="POST">
            @csrf
            <input type="text" name="todo" placeholder="Create New Todo" class="form-control input-group-lg">
        </form>

    </div>
</div>

<hr>
@foreach ($todos as $todo)

{{ $todo->todo}} <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger"> X </a>

<hr>

@endforeach

@endsection
