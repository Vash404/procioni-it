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
$cookie_value = "PA55word";

$user = $_POST["user"];
$password = $_POST["password"];

$sql = "SELECT cookie FROM login WHERE user = '$user' AND password = '$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      setcookie($cookie_name, $row["cookie"], time() + (86400 * 30), "/");
      header("location: index.php");
    }
} else {
    //header("location: login.php");
    echo "User: ". $_POST["user"] ." ";
    echo "Password: ". $_POST["password"] ." ";
    echo $sql;
    header("location: login.php");
}


//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
