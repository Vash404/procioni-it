<!DOCTYPE html>
<html lang="it">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Utenti</title>

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

  <!--  -->
  <main>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row">

        <h3>Utenti</h3>

        <input type='text' id='search' placeholder='Ricerca'>
        <table class="striped">
        <thead>
          <tr>
              <th>#</th>
              <th>Twitch Username</th>
              <th>Telegram ID</th>
              <th>Telegram Username</th>
              <th>Data Utlima Sub</th>
              <th>Numero Totale Sub</th>
              <th>Nel Canale</th>
              <th>Nel Gruppo</th>
              <th>Aggiungi Sub</th>
          </tr>
        </thead>
        <tbody>

<?php

$sql = "SELECT twitch_name, twitch_id, telegram_id, telegram_name, sub_date, in_channel, in_group FROM utenti";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $numero += 1;
        #$num_padded = sprintf("%02d", $row["posto"]);

        $sql = "SELECT data_sub FROM abbonamenti WHERE id_utente = ". $row["twitch_id"] ." ORDER BY id DESC LIMIT 1";
        $result2 = $conn->query($sql);

        if ($result2->num_rows > 0) {
          $sql3 = "SELECT data_sub FROM abbonamenti WHERE id_utente = ". $row["twitch_id"] ." ORDER BY id DESC";
          $result3 = $conn->query($sql3);

          while($row2 = $result2->fetch_assoc()) {
            echo "<tr>
                  <td>". $numero . "</td> 
                  <td>". $row["twitch_name"]. "</td> 
                  <td>". $row["telegram_id"] . "</td> 
                  <td><a href='https://t.me/". $row["telegram_name"] . "'>". $row["telegram_name"] . "</a></td> 
                  <td>" . $row2["data_sub"] . "</td> 
                  <td><form method='POST' action='abbonamenti.php'><button name='idtwitch' class='btn waves-effect waves-light' value='". $row["twitch_id"] . "'>$result3->num_rows</button></form></td> 
                  <td>";if($row["in_channel"] == 1) { echo "✅"; } else { echo "❌"; }
                  echo "</td>
                  <td>";if($row["in_group"] == 1) { echo "✅"; } else { echo "❌"; }
                  echo "</td>
                  <td><form method='POST' action='aggiungi.php'><button name='idtwitch' class='btn waves-effect waves-light' value='". $row["twitch_id"] . "'>Aggiungi</button></form></td>
                  </tr>";
          }
        }
        else {
          echo "<tr>
                <td>". $numero . "</td> 
                <td>". $row["twitch_name"]. "</td> 
                <td>". $row["telegram_id"] . "</td> 
                <td><a href='https://t.me/". $row["telegram_name"] . "'>". $row["telegram_name"] . "</a></td> 
                <td>" . "NO SUBS" . "</td> <td></td> 
                <td>";if($row["in_channel"] == 1) { echo "✅"; } else { echo "❌"; }
                echo "</td>
                <td>";if($row["in_group"] == 1) { echo "✅"; } else { echo "❌"; }
                echo "</td>
                <td><form method='POST' action='aggiungi.php'><button name='idtwitch' class='btn waves-effect waves-light' value='". $row["twitch_id"] . "'>Aggiungi</button></form></td> 
                </tr>";
        }
    }
} else {
    echo "0 results";
}

?>

        </tbody>
      </table>

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
