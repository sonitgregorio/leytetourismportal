<br /> <br/>
</div>
  <div class="panel-footer navbar-fixed-bottom footer-style">
      Leyte Tourism Portal And Booking | &copy 2015 | Powerd by: Google
  </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
              $('#example').DataTable();
      } );


      $(document).ready(function()
          $('.carousel').carousel({
              interval: 2000
              cycle: true;
            })

           $('#orig').submit(function() {
            $.post( "/login/origpost", $("#orig" ).serialize(), function(data){
            //  alert(data);
              $('#ors').html(data);

            });
         });
     });
</script>

</body>
</html>
