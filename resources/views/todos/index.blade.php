@extends('layouts.app')

@section('title')
Asks list
@endsection


@section('content')
<h1 class="text-center my-5">Asks</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                List 
            </div>
            <div class="card-body">

                <ul class="list-group">
                    @foreach($todos as $todo)
                    <li class="list-group-item">
                        {{$todo->name}}

                        @if(!$todo->completed)
                        <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end">Complete</a>

                        @endif

                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end mx-2">View</a>
                        


                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection