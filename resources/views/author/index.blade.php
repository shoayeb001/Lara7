<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of Authors</title>
</head>
<body>
<h1>List of Authors</h1>
<hr>
<button style="background-color: blue"><a style="text-decoration: none;color: whitesmokes" href="{{route('author.create')}}">Create New Author</a></button><br><br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th colspan="2">Actions</th>
    </tr>
    @foreach($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->email}}</td>
            <td>{{$author->date_of_birth}}</td>
            <td> <a href="{{ route('author.edit',$author->id) }}">Edit</a></td>
            <td> <form action="{{ route('author.destroy',$author->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">destroy</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
