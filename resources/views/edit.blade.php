    
@extends('home')
    
<body class="bg-dark">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
         
                <h3>TODO-list modify</h3>
                @if (count($todolist))
                @foreach ($todolist as $todolis)

                <form action="{{url("home")}}" method="POST" autocomplete="off">
                    <div class="input-group">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                   
                        <input type="text" name="task" class="form-control" placeholder="Modify your task" value="{{$todolis->task}}">
                        <button type="submit" class="btn btn-primary btn-sm px-4"><i class="fas fa-pen"></i></button>
                    </div>
                </form>
                @endforeach
                @endif
            </div>
        </div>

    </div>

