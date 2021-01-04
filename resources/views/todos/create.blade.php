@extends('layouts.app')


@section('content')

<h1 class="text-center my-5">Create Ask</h1>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">
            <div class="card-header">
                Create </div>
            <div class="card-body">

                <!--Message Errors-->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <list class="list-group-item">
                            {{$error}}
                        </list>
                        @endforeach
                    </ul>
                </div>


                @endif


                <form action="/store-todos" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Topic" name="name">
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="description" placeholder="Question" cols="5" rows="5"
                            class="form-control"></textarea>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success ">Create your Ask</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection