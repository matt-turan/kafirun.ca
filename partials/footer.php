  <footer class="text-center">
    <?php
      echo "© All Rights Reserved&nbsp;" . date("Y");
    ?>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/freelancer.min.js"></script>
  <script type="text/javascript">

    $('#overlay-div').on('click', function(){
        $(this).fadeOut();
        $('body').removeClass('modal-open');
    });

  </script>

  </body >
</html>
