<html>
<head>
<script src="{{('assets/js/jquery.min.js')}}">
</script>
<link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
</head>
<body>
<div class="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/create">Create Account</a></li>
      <li><a href="/list">UserList</a></li>
      <li><a href="/">Login</a></li>
	   
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>&nbsp;&nbsp;&nbsp;
    </ul>
  </div>
</nav>
</div>
<div class="content">
@section('content')
<h2>content</h2>
@show
</div>
<div class="footer">
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</body>
</html>