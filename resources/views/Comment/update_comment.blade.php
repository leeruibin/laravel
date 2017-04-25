<html >
<head>

    <meta charset="utf8">
</head>
<body>
<form action="{{url('/comment/update/')}}{{'/' . $id}}" method="POST">
    {{csrf_field()}}

    <h2>更新你的留言</h2>
    文章标题:{{$comment[0]->title}}
    <br>
    我的评论:{{$comment[0]->content}}<br>

    修改评论:<textarea name = "content" cols="30" rows="8"></textarea>
     <button type="submit">提交修改</button>
</form>
<form action="{{url('/comment/delete/'.$id)}}" method="POST">
    {{csrf_field()}}
    <h2>删除你的留言?</h2>
    <button type="submit">确定删除</button>
</form>
</body>
</html>
