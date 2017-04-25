<html >
<head>

    <meta charset="utf8">
</head>
<body>
<form action="{{url('/article')}}" method="POST">
    {{csrf_field()}}
    <h2>新增留言</h2>
    <textarea name = "content" cols="40" rows="10"></textarea>
    <button type="submit">提交</button>
</form>
</body>
</html>
