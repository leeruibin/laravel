<html >
<head>

    <meta charset="utf8">
</head>
<body>
<form action="{{url('/article')}}" method="POST">
    {{csrf_field()}}
    <textarea name="content">
    </textarea>
    <button type="submit">submit</button>
</form>
</body>
</html>