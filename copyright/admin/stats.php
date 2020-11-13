<!DOCTYPE html>
<html lang="it">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Statistiche</title>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row">
            <!--<canvas id="myChart" width="400" height="400"></canvas>-->
            <h3>Statistiche</h3>

            <p>Utenti totali: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE 1";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b></p>

            <p>Utenti con API nuove: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE `twitch_access_token` is not null";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b></p>

            <p>Utenti nel canale: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE `in_channel` = 1";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b> <i>(questo dato potrebbe non essere aggiornato)</i></p>

            <p>Utenti nel gruppo: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE `in_group` = 1";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b></p>

            <p>Utenti con API vecchie: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE `twitch_access_token` is null AND `twitch_id` is not null";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b></p>

            <p>Utenti senza collegamento a Twitch: <b>
            <?php   
                $sql = "SELECT id FROM `utenti` WHERE `twitch_id` is null";
                $result = $conn->query($sql);
                echo $result->num_rows; 
            ?></b></p>

        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Utenti che hanno contattato', 'Utenti con abbonamento'],
        datasets: [{
            label: '# of Votes',
            data: [2373, 1069],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
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