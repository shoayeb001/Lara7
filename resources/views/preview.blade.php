<!DOCTYPE html>
<html>
<body>

<h2>Preview Result</h2>
@foreach($result as $r)
 <p>ID:{{ $r->id }}</>
 <p>Name:{{ $r->name }}</>
 <p>Email:{{ $r->email}}</>
 <p>Phone:{{ $r->phone }}</>
@endforeach
<h4><a href="{{route('about.form')}}">Back</a></h4>
</body>
</html>
