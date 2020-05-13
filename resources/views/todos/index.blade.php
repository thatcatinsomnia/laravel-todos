@extends('layouts.app')

@section('title')
Todos List
@endsection

@section('content')

<h1 class="text-center py-5">TODOS PAGE</h1>

<div class="row justify-content-center">

  <div class="col-md-8">

    <div class="card card-default">

      <div class="card-header">
        Todo
      </div>

      <div class="card-body">

        <ul class="list-group">
          @foreach($todos as $todo)
          <li class="list-group-item">
            {{ $todo->name }}
            @if(!$todo->completed)
            <form action="/todos/{{$todo->id}}/complete" method="POST">
              @csrf
              <button type="submit" class="btn btn-success btn-sm float-right">Complete Todo</button>
            </form>
            @endif
            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
          </li>
          @endforeach
        </ul>

      </div>

    </div>

  </div>

</div>

@endsection