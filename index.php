<!DOCTYPE html>
<html lang="it-it">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="true">

<link rel="stylesheet" href="assets\css\main.css">
<link rel="shortcut icon" type="image/ico" href="assets\images\favicon.ico"/>


<!-- Primary Meta Tags -->
<title>Procioni.it | Il sito dei procioni</title>
<meta name="title" content="Procioni.it | Il sito dei procioni">
<meta name="description" content="Vuoi vedere dei procioni che bevono il latte e cercano di affogare?">
<link rel="apple-touch-icon" sizes="128x128" href="assets\images\0b1ad2b3361ab99389940ee48cf56d71.jpg">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://procioni.it/">
<meta property="og:title" content="Procioni.it | Il sito dei procioni">
<meta property="og:description" content="Vuoi vedere dei procioni che bevono il latte e cercano di affogare?">
<meta property="og:image" content="assets\images\0b1ad2b3361ab99389940ee48cf56d71.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://procioni.it/">
<meta property="twitter:title" content="Procioni.it | Il sito dei procioni">
<meta property="twitter:description" content="Vuoi vedere dei procioni che bevono il latte e cercano di affogare?">
<meta property="twitter:image" content="assets\images\0b1ad2b3361ab99389940ee48cf56d71.jpg">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-83J0GM4T3X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-83J0GM4T3X');
</script>
</head>
<body>

<div class="header" id="myHeader">
  <h1>Procioni</h1>
</div>

<div class="row"> 
  <?php 
    $path = 'assets/photos/';
    $files = scandir($path);
    $f = 1;
    $numero_files = count($files);

    for ($c = 0; $c < 4 ; $c++) {
      echo '<div class="column">';

      for ($i = 0; $i < 8; $i++) {
        $f++;
        echo '<img src="'.$path.$files[rand(0, $numero_files)].'" style="width:100%">';
        #echo $path.$files[$f];
      }
      echo '</div>';
    }
  ?>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
