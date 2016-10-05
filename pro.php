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
    	    <div class="row">

    	      <section id="work" class="col-md-12">
	              <h4><span class="glyphicon glyphicon-briefcase"></span><b>  WORK</b></h4>
	              <article>
	                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. <b>Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies.</b> Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. Aenean nec neque odio. <b>Donec cursus</b> est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
	              </article>
              </section>
            </div>
          </div>
		  
		  <div class="col-md-3 col-md-offset-1"  style="text-align:center; margin-top:50px;">
		  	<h4 style="margin-bottom:0px;"><b>COMPETENCES</b></h4>
		  	<ul class="list-group">
		  		<li class="list-group-item">HTML5</li>
		  		<li class="list-group-item">CSS3</li>
		  		<li class="list-group-item">PHP</li>
		  		<li class="list-group-item">SQL</li>
		  	</ul>
		  </div>
		  <div class="col-md-12">
		  	<hr style="width:60%; color:#B2C7FF; background-color:#777; height:1px; margin-top:25px; opacity:0.5;"/>
		  </div>
		</div>

		<br/>
	<div  class="row" style="margin-bottom:50px;">
		 <section id="work" class="col-md-5 col-md-offset-1">
	              <h5><b><u>EXPERIENCES</u></b></h5>
	              <article>
	                <ul style="list-style:none; margin-bottom: 20px;">
	                	<li><b>Experiences 1 :</b> Etiam ultrices</li>
	                	<li><b>Experiences 2 :</b> pharetra purus</li>
	                	<li><b>Experiences 3 :</b> laoreet risus in</li>
	                </ul> 
	              </article>
	            </section>

	          <section id="hobbys" class="col-md-5">
	            <h5><b><u>FORMATIONS</u></b></h5>
	            <article>
	              <ul  style="list-style:none;">
	                	<li style="margin-top: 20px;"><b>School 1 :</b> laoreet risus in</li>
	                	<li><b>School 2 :</b> Etiam ultrices tellu</li>
	                	<li><b>School 3 :</b> pharetra purus</li>
	                </ul>  
	            </article>
	          </section>
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