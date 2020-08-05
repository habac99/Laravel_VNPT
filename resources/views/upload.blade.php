<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo Upload File - Toidicode.com</title>
    <meta name="author" content="ThanhTai">
    <link rel="stylesheet" href="/css/test.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<form action="{{ route('upload') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="filesTest" required="true">
    <br/>
    <input type="submit" value="upload">
</form>

</body>
</html>
