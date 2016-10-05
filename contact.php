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
      <section class="col-md-10 col-md-offset-1">
        <ul class="nav nav-pills">
          <li class="active"><a href="#contact" data-toggle="tab">Contact</a></li>
          <li><a href="#informations" data-toggle="tab">Informations pratiques</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active fade in" id="contact">
            <form role="form">
              <h4>Comment m'avez-vous trouvé ?</h4>
              <fieldset>
                <div class="radio">
                  <label for="ami" class="radio">
                    <input type="radio" name="origine" value="ami" id="ami">
                    Par un ami 
                  </label>
                </div>
                <div class="radio">
                  <label for="web" class="radio">
                    <input type="radio" name="origine" value="web" id="web">
                    Sur le web 
                  </label>
                </div>
                <div class="radio">
                  <label for="hasard" class="radio">
                    <input type="radio" name="origine" value="hasard" id="hasard">
                    Par hasard 
                  </label>
                </div>
                <div class="radio">
                  <label for="autre" class="radio">
                    <input type="radio" name="origine" value="autre" id="autre">
                    Autre... 
                  </label>
                </div>
                <label for="textarea">Votre message :</label>
                  <textarea id="textarea" class="form-control" rows="4"></textarea>
                  <p class="help-block">Vous pouvez agrandir la fenêtre</p>
                  <button class="btn btn-primary" type="submit" style="text-align: center;"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer</button>
              </fieldset>
            </form>
          </div>
          <div class="tab-pane fade" id="informations">
            <div>
              <h2>Informations pratiques</h2>
              <ul style="list-style:none">
                <li>Téléphone : 07-62-88-71-07</li>
                <li>Email : adrien.simon@edu.esiee.fr</li>
              </ul>
            </div>
          </div>
        <div class="tab-content">
      </section>
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