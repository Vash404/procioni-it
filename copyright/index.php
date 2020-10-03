<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Procione">
    <link rel="icon" href="assets/favicon.ico">

    <title>Copyright</title>

    <link rel="canonical" href="https://procioni.it/copyright">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/album.css" rel="stylesheet">
  </head>
    <?php
        require 'assets/secrets.php';
        $query = "SELECT immagine, descrizione, nome, data FROM copyright";
        $result = mysqli_query($conn, $query);
    ?>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Info</h4>
              <p class="text-muted">Sito stupido. <small>come vash</small></p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contatti</h4>
              <ul class="list-unstyled">
                <li><a href="https://t.co/vash404" class="text-white">Twitter</a></li>
                <li><a href="https://t.me/vash404" class="text-white">Telegram</a></li>
                <li><a href="mailto:lucchesi@quiethub.it" class="text-white">Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>&copy; Copyright</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">I nostri copyright</h1>
          <p class="lead text-muted">Qua sotto sono presenti i copyright registrati presso di noi, con i relativi proprietari e le relative date.</p>
          <p>
            <a href="mailto:procione.copyright@gmail.com?subject=Richiesta Copyright" class="btn btn-primary my-2">Richiedi un Copyright</a>
            <a href="mailto:procione.copyright@gmail.com?subject=Abuso Copyright" class="btn btn-secondary my-2">Segnala un uso illegale del tuo Copyright</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <?php
                while($row = mysqli_fetch_array($result)){
                    echo '
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="'.$row["immagine"].'">
                                <div class="card-body">
                                    <p class="card-text">'.$row["descrizione"].'</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">'.$row["nome"].'</button>
                                        </div>
                                        <small class="text-muted">'.$row["data"].'</small>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
            ?>

          </div>
        </div>

      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Torna all'inizio</a>
        </p>
        <p>QUESTO SITO NON VA PRESO SUL SERIO.</p>
        <p><b>NESSUN</b> COPYRIGHT (&copy;) PRESENTE SU QUESTO SITO VA PRESO SERIAMENTE.</p>
        <p>SE HAI DOMANDE O LAMENTELE CONTATTA <a href="mailto:lucchesi@quiethub.it">lucchesi@quiethub.it</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
