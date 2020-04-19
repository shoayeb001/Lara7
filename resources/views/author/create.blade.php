<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Author</title>
</head>
<body>
<h1>Create New Author</h1>
<hr>
<form action="{{route('author.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter author name"><br>
    <input type="email" name="email" placeholder="Enter author email"><br>
    <input type="date" name="date_of_birth" placeholder="Select author's date of birth"><br><br>
    <button style="background-color: blue;color: whitesmoke;" type="submit">store</button>
</form>

</body>
</html>
