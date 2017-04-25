<html >
<head>
<meta charset="utf8">
</head>
<body>
<form action="{{url('/comment/delete')}}" method="POST">
    {{csrf_field()}}

    <h2>删除你的留言</h2>

    你总共有{{count($comment)}}条评论<br><br>
    @for($i = 0 ; $i < count($comment); $i++)
      第{{$i+1}}个评论<br>
      评论的文章号为{{$comment[$i]->article_id}}<br>
      评论编号为{{$comment[$i]->id}}<br>
      评论内容为:{{$comment[$i]->content}}<br><br>
    @endfor
    


    <h4>输入你要删除的评论编号</h4>
    <input type="text" name="comment_id"></input>
    <button type="submit">确定删除</button>
</form>
</body>
</html>
