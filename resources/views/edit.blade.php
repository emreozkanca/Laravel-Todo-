<!DOCTYPE html>
<html>
<head>
    <title>Edit item</title>
</head>
<body>
    <h1>Edit item</h1>
    <form method="POST" action="/update/{{$todo->id}}">
        @csrf

        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $todo->content }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>