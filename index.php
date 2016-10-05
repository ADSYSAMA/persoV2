<!DOCTYPE HTML>

<html>


  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
  <?php require('menu.php'); ?>

    <div class="container">

      <div class="row" style="margin-top: -20px;">
        <div class="col-md-12">
          <div class="row"  style="margin-top: 20px;">  
            <section id="resume" class="col-md-8">
              <h4><span class="glyphicon glyphicon-tasks"></span><b> RESUME</b></h4>
              <img src="images/profil.png" style="float: left; height:100px; width:100px; margin-right: 10px; margin-bottom:auto; border-radius: 25px; margin:10px;">
              <p style="font-size:13px;">Lorem ipsum dolor sit amet, consectetur <b>adipiscing elit</b>. Fusce id ligula ac metus tempor efficitur. Integer dapibus justo rhoncus nunc rutrum congue. Suspendisse gravida quam vel aliquet iaculis. Donec sed nulla eget ante tempus venenatis mattis et tortor. Maecenas vulputate erat magna, in porta mauris porta sed. Quisque ipsum purus, vulputate eget pharetra nec, vestibulum at nibh. Nunc congue varius arcu ac elementum.<b> Aliquam vulputate risus nulla, id cursus metus volutpat eu. Ut vitae magna scelerisque, ullamcorper eros ac, scelerisque neque.</b> Ut eget lorem eu odio sodales bibendum et id ex. Quisque luctus, odio ac lacinia convallis, elit libero tempus est, nec fermentum diam odio quis tortor. Praesent sit amet risus vel massa posuere faucibus at at ex. <b>Integer ultricies ut neque eu ultrices.</b> </p> 
              
            </section>

            <article class="col-md-4">
              <h4><span class="glyphicon glyphicon-info-sign"></span><b> NEWS</b></h4>
              <p>Ut eget lorem eu odio sodales bibendum et id ex. Quisque luctus, odio ac lacinia convallis, elit libero tempus est, nec fermentum diam odio quis tortor. Praesent sit amet risus vel massa posuere faucibus at at ex. <b>Integer ultricies ut neque eu ultrices.</p>
            </article>
        </div>
      </div>
      <p class="row" style="text-align: center; margin-top:50px; margin-bottom:30px;"><a href="pro.php">My work » </a><a href="hobbys.php" style="margin-left:20px;">My hobbys » </a><a href="contact.php" style="margin-left:20px;">Contact me » </a></p>
  </div>
  <?php require('footer.php'); ?>
</div>
</body>
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    $(function () {
      $('.carousel').carousel({ interval: 2000 });
    });
  </script>
</html>