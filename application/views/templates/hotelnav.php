
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="padding:0;">
      <div class="container-fluid backs" style="padding:2;BORDER-BOTTOM: #522B04 2px solid;">
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
      <li class = "<?php echo $param == 'manage_rooms' ?  'active' : '' ?>"><a href="/manage_rooms"><i ></i>&nbsp;<b>Manage Rooms</b></a></li> 
      <li class = "<?php echo $param == 'hotel_settings' ? 'active' : '' ?>"><a href="/hotel_settings"><span class="glyphicon glyphicon-edit"></span>&nbsp;<b>Hotel Information</b></a></li> 
      <li class = "<?php echo $param == 'reservation_list' ? 'active' : '' ?>"><a href="/reservation_list"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Reservation</b></a></li> 
    </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="label" type="submit"  href="/logout" style="color:gray;">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>
      </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>
