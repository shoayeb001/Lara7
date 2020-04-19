<!DOCTYPE html>
<html>
<body>

<h2>About Form</h2>

{{--<form action="<?php echo url('peoplentech/about/preview') ?>" method="post">--}}
<form action="{{ route('about.preview') }}" method="post">
{{--    <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" >--}}
    @csrf
    <input type="text" name="full_name" placeholder="Enter your name"><br><br>
    <input type="email" name="email_address" placeholder="Enter your email"><br><br>
    <input type="phone" name="phone_number" placeholder="Enter your phone"><br><br>
    <button>Preview</button>

</form>


</body>
</html>
