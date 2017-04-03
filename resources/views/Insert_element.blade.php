<html>
<head>
  <meta charset="utf-8">
  <title>插入元素</title>
</head>
<body>
  <h1>插入元素</h1>
  <form action="{{url('/list/insert_request')}}" method="get">

  输入要插入的元素: <input type="text" name="insert_element" value=""><br>
  输入要插入的位置: <input type="text" name="insert_location"><br>
       <button type="submit">提交</button>

  </form>

</body>
</html>
