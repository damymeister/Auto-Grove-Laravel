<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>AutoGrove - Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <link href="/css/main.css" rel = "stylesheet">
    <style>
        body{
            background-color: #e8e8e8;
        }
        .title{
            text-align: center;
            background-color: transparent
        }
        .table-container{
            background-color: white;
            max-width: 900px;
            margin: 0 auto;
        }   
        .footer-button{
            background-color: transparent;
            float: right;
            margin-top: 3%;
        }
        table{
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
@include('layouts.navbar')
    <div class="table-container">
        <div class="title">
            <h3>Blog motoryzacyjny Auto-Grove</h3>
        </div>
        @auth
        <div class='przyciski'>
        <a class="btn btn-outline-light btn-lg px-1 py-1 bg-black" href="{{ route('create') }}">Dodaj Wpis</a>
        </div>
        <table data-toggle="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Użytkownik</th>
                    <th>Data dodania</th>
                    <th>Data ost. modyfikacji</th>
                    <th>Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)    
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->created_at}}</td>
                    <td>{{$comment->updated_at}}</td>
                    <td>{{$comment->message}}
                    <br /> @if($comment->user_id == \Auth::user()->id || \Auth::user()->role_id == 2 || \Auth::user()->role_id == 3)
                    <a href="{{ route('edit', $comment) }}" 
                        class="btn btn-success btn-xs" title="Edytuj"> Edytuj </a>
                        <a href="{{ route('delete', $comment->id) }}" class="btn btn-danger btn-xs"
                        onclick="return confirm('Jesteś pewien?')"
                        title="Skasuj"> Usuń </a>
 @endif
                    </td>
                </tr>
                @endforeach
             </tbody>
        </table>
        <br>       
        @endauth
    </div>     
  
    @guest
    <div class="table-container">
        <b>Zaloguj się aby przejrzeć posty.</b>
    </div>    
    @endguest  
    @include('layouts.footer')   
</body>
</html>
