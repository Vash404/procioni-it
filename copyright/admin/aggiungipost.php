<?php
$servername = "89.46.66.13"; #Connessione a database
$usernameDB = "sd_twitchbot";
$password = "p78!al2K";
$dbname = "sd_twitchbot";

#Creo la connessione con il database
$conn = new mysqli($servername, $usernameDB, $password, $dbname);

#Controllo se la connessione è avvenuta, in caso contrario stampo l'errore
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<!--Connesso al database-->";

//Prendo tutte le variabili passate dal POST e le mostro a schermo
$idSub = "generata";

$idtwitch = $_POST['idtwitch'];
$idSub .= generateRandomString(); 
$mesesub = $_POST['mesesub'];
$subPlan = "1000";

//Creo la query per l'immisione nel database
$sql = "INSERT INTO `abbonamenti` (`id_utente`, `idSub`, `data_sub`, `subPlan`) 
VALUES ('$idtwitch', '$idSub', '$mesesub', '$subPlan')";

if ($conn->query($sql) === TRUE) { //Eseguo la query e se tutto va bene scrivo a schermo che è stato aggiunto altrimenti mostro l'errore
    echo "Record aggiunto!";
    header("location: utenti.php");
    echo "<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo $sql; //Stampo la query generata
?>