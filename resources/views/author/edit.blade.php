<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Author</title>
</head>
<body>
<h1>Edit Author</h1>
<hr>
<form action="{{route('author.update',$authors->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$authors->name}}" placeholder="Enter author name"><br>
    <input type="email" name="email" value="{{$authors->email}}" placeholder="Enter author email"><br>
    <input type="date" name="date_of_birth" value="{{$authors->date_of_birth}}" placeholder="Select author's date of birth"><br><br>
    <button style="background-color: blue;color: whitesmoke;" type="submit">update</button>
</form>

</body>
</html>
