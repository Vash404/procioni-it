<style>
body {
  background-color: #1A1A1D!important;
}

.textsotinput{
    margin-top: 10%;
    margin-left: 10%;
    margin-right: 10%;
    padding-bottom: 200px;
}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php
$pass = $_POST['pass'];

if($pass == "banana")
{
        include("video.php");
}
else
{
?>
  <div class="textsotinput">
    <h2 class="h1 text-white">Inserisci password</h2>

    <form method="POST" action="#">
      <div class="form-group">
        <input type="text" placeholder="Password enigma" class="form-control" id="InputPassword" name="pass">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php
}
?>



<?PHP
/*
$file_location = "C:\Users\\";
exec("start \"\" \"{$file_location}\"");
*/
/*
$dir = "C:\Users\quiet";
 
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}*/
?>