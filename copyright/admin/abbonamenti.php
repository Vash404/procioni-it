<!DOCTYPE html>
<html lang="it">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Aggiungi</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</head>
<body>

<?php include 'require/header.php';?>
<?php $idTwitch = $_POST['idtwitch']; ?>
  <main>
  <div class="section no-pad-bot" id="index-banner" action="GET">
    <div class="container">
      <div class="row">

        <h3>Abbonamenti</h3>
        <div class="row">
            <table class="striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Livello</th>
            </tr>
            </thead>
            <tbody>

            <?php

            $sql = "SELECT id, data_sub, subPlan FROM abbonamenti WHERE id_utente = ". $idTwitch ."";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>". $row["id"]. "</td> <td>". $row["data_sub"] . "</td> <td>". $row["subPlan"] . "</td></tr>";
                    
                }
            } else {
                echo "0 Risultati";
            }

            ?>

            </tbody>
        </table>
        </div>

      </div>
    </div>
  </div>
</main>
<script>
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
    $('.scrollspy').on('scrollSpy:enter', function() {
      $('.section').find('a[href="#'+$(this).attr('id')+'"]').parent().addClass('active');
    });
    $('scrollspy').on('scrollSpy:exit', function(){
      $('.section').find('a[href="#'+$(this).attr('id')+'"]').parent().removeClass('active');
    });
  });
</script>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/search.js"></script>
  <script src="../js/konami.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138864706-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-138864706-1');
  </script>
  </body>
</html>
