
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
  <a class="navbar-brand" href="/"  style="color:white">LTP</a>

</div>
  
  <?php
      $counts = 0;
      $userid = $this->session->userdata('uid');
      $hid = $this->db->query("SELECT * FROM tbl_hotel WHERE owned = '$userid'")->result_array();
      foreach ($hid as $key => $value) {
        $d = $value['id'];
        $y = $this->db->query("SELECT * FROM tbl_reserve WHERE hid = '$userid' AND stats = 'Pending'")->result_array();
        foreach ($y as $key => $value) {
          $counts = $counts + 1;
        }
      }
   ?>
 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
    <ul class="nav navbar-nav">
      <li class = "<?= $param == 'home' ? 'active' : '' ?>"><a href="/home"  style="color:white"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
      <li class = "<?= $param == 'settings' ?  'active' : '' ?>"><a href="/settings"  style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Settings</b></a></li> 
      <li class = "<?= $param == 'manage_rooms' ?  'active' : '' ?>"><a href="/manage_rooms"  style="color:white"><i ></i>&nbsp;<b>Manage Rooms</b></a></li> 
      <li class = "<?= $param == 'hotel_settings' ? 'active' : '' ?>"><a href="/hotel_settings"  style="color:white"><span class="glyphicon glyphicon-edit"></span>&nbsp;<b>Hotel Information</b></a></li> 
      <li class = "<?= $param == 'reservation_list' ? 'active' : '' ?>"><a href="/reservation_list"  style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Reservation</b>&nbsp;<span class="badge"><?= $counts ?></span></a></li> 
      <li class = "<?= $param == 'user_logs' ? 'active' : '' ?>"><a href="/user_logs"  style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Logs</b></a></li> 
      <li class = "<?= $param == 'faq' ? 'active' : ''; ?>"><a href="/faq" style="color:white"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>FAQ</b></a></li>
      
    </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="btn btn-success loging" data-type="1" data-toggle="modal" data-target="#login"><?php echo $this->session->userdata('firstname') ?></a> 
              <a class="btn btn-success" type="submit"  href="/logout" style="color:white;">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>
      </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>
