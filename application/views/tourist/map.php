
<?php
  if ($spots == "macarthur") {
    $spots = "MacArthur Park, Palo Leyte";
  }elseif ($spots == "palocathedral") {
    $spots = "Cathedral, Palo Leyte";
  }
  echo $spots;
  echo $origin;
 ?>
<iframe class= "col-md-12" height="400" frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo urlencode($origin); ?>&destination=<?php echo urlencode($spots) ?>&key=AIzaSyCQsaQYMeegD3H-wv6149gnnKWezQXQ4MU" allowfullscreen style="overflow:auto"></iframe>
 </iframe>
