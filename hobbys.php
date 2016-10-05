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
      <div class="row">
        <div class="col-md-8">

           <section id="hobbys" class="col-md-12">
            <h4><span class="glyphicon glyphicon-star-empty"></span>  <b>HOBBYS</b></h4>
            <article>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. <b>Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit</b>, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies. Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. <b>Aenean nec neque odio.</b> Donec cursus est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
            </article>
          </section>

          <div class="col-md-12">
            <hr style="width:100%; color:#B2C7FF; background-color:#777; height:1px; margin-top:25px;opacity:0.5;"/>
          </div>

          <section id="collection" class="col-md-12">
            <h4><span class="glyphicon glyphicon-picture"></span> <b>COLLECTION</b></h4>
            <div id="carousel" class="carousel slide" style="border-radius: 10px;">
              <div class="carousel-inner">
                <div class="item active"><img src="images/collection1.jpg"></div>
                <div class="item"><img src="images/collection2.jpg"></div>
                <div class="item"><img src="images/collection3.jpg"></div>
                <div class="item"><img src="images/collection4.jpg"></div>
                <div class="item"><img src="images/collection5.jpg"></div>
              </div>
            </div>
          </section>

          

        </div>
        <div class="col-md-4" style="margin-top:5px;">
          <div class="col-md-12">
            <hr style="width:100%; color:#B2C7FF; background-color:#777; height:1px; margin-top:25px;opacity:0.5;"/>
          </div>
          <aside style="margin-left:26px; margin-top:60px;">
              <h4 style="margin-bottom:10px;margin-top: 20px; text-align:justify;margin-left:25px;"><b>JEUX JOUES</b></h4>
              <ul style="list-style:none;">
                <li><a href="http://euw.leagueoflegends.com/fr" ><img src="images/lol.png" style="width:80px; height:50px;"></a></li>
                <li><a href="http://eu.battle.net/hearthstone/fr/"><img class="img-rounded" src="images/hs.png"  style="width:80px; height:50px;"></a></li>
                <li><a href="www.counter-strike.net/"><img src="images/csgo.png"  style="width:80px; height:50px;"></a></li>
              </ul>
            </aside> 
            <div class="col-md-12" style="margin-top:38px;">
              <hr style="width:100%; color:#B2C7FF; background-color:#777; height:1px; margin-top:20px; opacity:0.5;"/>
            </div>
        </div>
      </div>  
        <br/>
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