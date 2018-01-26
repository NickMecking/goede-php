<?php
date_default_timezone_set("Europe/Amsterdam");

$tijd = date("H:i:s");

if ($tijd < "18.00" ) {
  $message = "Goedemiddag";
  $image = "backgrounds/afternoon.png";
  }
  elseif ($tijd < "24.00" ) {
    $message = "Goedeavond";
    $image = "backgrounds/evening.png";
  }
  elseif ($tijd < "6.00" ) {
    $message = "Goedenacht";
    $image = "backgrounds/night.png";
  }
  if ($tijd < "12.00") {
    $message = "Goedemorgen";
    $image = "backgrounds/morning.png";
  }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="refresh" content ="1">
    <title>Goede Morgen</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
  </head>
<body style="background-image: url(<?php echo $image; ?>);background-size: cover;">
<?php echo "<h1>" . $message . "</h1>"; ?>
<?php echo "<p>" . $tijd . "</p>"; ?>
</body>
</html>
