<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>

</head>
@yield('content') 

<body class="bg-dark">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>TODO-list</h3>
                @yield('content')
                <form action="{{route("store")}}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="task" class="form-control" placeholder="Add your task">
                        <button type="submit" class="btn btn-primary btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
                @if (count($todolist))
                    <table class="list-group list-group-flush px-4 mt-3">
                        <tbody class="list-group-item px-3">
                        @foreach ($todolist as $todolis)
                        <td>{{$todolis->task}}</td>
                        <td>
                            <form action="{{route("destroy", $todolis->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm float-end"><i class="fas fa-trash"></i></button>
                        </td>
                        
                        <td> <a  class="btn btn-success btn-sm float-end" href="{{ url('/'.$todolis->id. '/edit') }}"><i class="fas fa-pen"></i></a></td>
                        
                        @endforeach
                        </td>
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

    </div>

    
</body>

</html>