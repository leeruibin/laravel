<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/WebHtml/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/WebHtml/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/WebHtml/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/WebHtml/index2.html" class="navbar-brand"><b>Admin</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search" action="{{url('/search')}}" method="get">
            <div class="form-group">
              {{csrf_field()}}
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search number" name="search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="/WebHtml/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="/WebHtml/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{$user->name}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="/WebHtml/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    {{$user->name}}
                    <small>Member since {{$user->created_at}}</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{url('/admin/user/')}}/{{$user->id}}/edit" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{  url('/logout')  }}" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          查看文章

        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
        <a class="btn btn-block btn-default" href="http://127.0.0.1:1024/admin/article/create" >新增</a>

      </div>
        <div class="col-md-12">
            <!-- Box Comment -->
            @foreach ($articles as $article)
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="/WebHtml/dist/img/user1-128x128.jpg" alt="User Image">
                  @if($article->user_id == $user->id || $user->admin_state != 0)
                  <span class="text-muted pull-right">
                    <form action="{{url('article/')}}/{{$article->id}}" method="post">
                      {{ method_field('DELETE') }}
                      {{csrf_field()}}
                      <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> 删除</button>
                    </form>
                  </span>
                  <span class="text-muted pull-right">
                      <a  class="btn btn-default btn-xs" href="{{url('admin/article')}}/{{$article->id}}/edit"><i class="fa fa-thumbs-o-up"></i>编辑</a>
                  </span>
                  @endif
                  <span class="username"><a href="＃">{{$article->hasOneUser->name}}</a></span>
                  <span class="description">{{$article->updated_at}}</span>

                </div>
                <!-- /.user-block -->

              <!-- /.box-header -->
              <div class="box-body">
                <!-- post text -->

                <a href="{{url('article')}}/{{$article->id}}"><p>{{$article->title}}</p></a>
                <p>{{$article->body}}</p>

                <!-- Attachment -->

                <!-- Social sharing buttons -->

                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                <span class="pull-right text-muted">TODO 45 likes - 2 comments</span>
              </div>
              <!-- /.box-body -->
              <div class="box-footer box-comments">
                @foreach ($article->hasManyComments as $comment)
                <div class="box-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="/WebHtml/dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                        <span class="username">
                          {{$comment->hasOneUser->name}}
                          <span class="text-muted pull-right">{{$comment->updated_at}}</span>
                        </span><!-- /.username -->
                    {{$comment->content}}
                    @if( $comment->user_id === $user->id  || $user->admin_state != 0)
                      <span class="text-muted pull-right">
                        <form action="{{url('comment/')}}/{{$comment->id}}" method="post">
                          {{ method_field('DELETE') }}
                          {{csrf_field()}}
                          <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> 删除</button>
                        </form>
                      </span>
                      <span class="text-muted pull-right">

                            <a class="btn btn-default btn-xs" href="{{url('admin/comment')}}/{{$comment->id}}/edit"><i class="fa fa-thumbs-o-up"></i> 编辑</a>

                      </span>
                    @endif
                  </div>
                  <!-- /.comment-text -->
                </div>
                @endforeach
                <!-- /.box-comment -->
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <form action="comment" method="post">
                  <img class="img-responsive img-circle img-sm" src="/WebHtml/dist/img/user4-128x128.jpg" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    {{csrf_field()}}
                    <input class="form-control input-sm" placeholder="Press enter to post comment" type="text" name="content">
                    <input type="hidden" name='article_id' value='{{ $article->id }}'>
                  </div>
                </form>
              </div>
              <!-- /.box-footer -->
            </div>
            @endforeach
            {!! $articles->links() !!}
            <!-- /.box -->
          </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/WebHtml/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/WebHtml/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/WebHtml/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/WebHtml/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/WebHtml/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/WebHtml/dist/js/demo.js"></script>
</body>
</html>
