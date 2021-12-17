<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>

<body class="bg-info">
        <div>
            <form action="{{ route('search') }}" autocomplete="off">
                @csrf
                <table>
                @foreach ($todolists as $todolist)
                <tr>
                    <td>{{ $todolist->id }}</td>
                    <td>{{ $todolist->content }}</td>
                    <td>
                        @if (Auth::user()->role == 'user')
                            <a href="todo/{{$todolist->id}}/edit" class="btn btn-link btn-sm float-end fas fa-edit"></a>
                        @endif
                    </td>

                </tr>
                @endforeach
            </table>
            </form>
        </div>
</html>
