
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="padding:0;">
      <div class="container-fluid" style="padding:2;background-color: #8C4600;BORDER-BOTTOM: #522B04 2px solid;BACKGROUND-COLOR: #8C4600;">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="/">LTP</a>

</div>

 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
    <ul class="nav navbar-nav">
      <li class = "<?php echo $param == 'home' ? 'active' : '' ?>"><a href="/home"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
      <li class = "<?php echo $param == 'settings' ?  'active' : '' ?>"><a href="/settings"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Settings</b></a></li> 
      <li class = "<?php echo $param == 'manage_routes' ?  'active' : '' ?>"><a href="/manage_routes"><i ></i>&nbsp;<b>Manage Routes</b></a></li> 
      <li class = "<?php echo $param == 'trans_setting' ? 'active' : '' ?>"><a href="/transpo_settings"><span class="glyphicon glyphicon-edit"></span>&nbsp;<b>Transportation Information</b></a></li>
    </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="btn btn-success loging" data-type="1" data-toggle="modal" data-target="#login"><?php echo $this->session->userdata('firstname') ?></a> 
              <a class="btn btn-success" type="submit" href="/logout">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>
      </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
