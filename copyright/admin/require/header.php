<?php
$servername = "89.46.66.13";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<!--Connesso al database-->";



$cookie_name = "user";
$cookie = $_COOKIE[$cookie_name];

if(!isset($_COOKIE[$cookie_name])) {
    header("location: login.php");
}

else {

    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    //echo "Value is: " . $_COOKIE[$cookie_name];
    $sql = "SELECT password FROM login WHERE cookie = '$cookie'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

        }
    } else {
        header("location: login.php");
    }
}

?>


<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Home</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="utenti.php">Utenti</a></li>
      <li><a href="aggiungi.php">Aggiungi</a></li>
      <li><a href="stats.php">Statistiche</a></li>
    </ul>

    <!-- Menù mobile -->
    <ul id="nav-mobile" class="sidenav">
      <li><a href="utenti.php">Utenti</a></li>
      <li><a href="aggiungi.php">Aggiungi</a></li>
      <li><a href="stats.php">Statistiche</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>