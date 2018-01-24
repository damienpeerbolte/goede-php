<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <title>GoodPHP</title>
  </head>
  <body>
    <?php
        date_default_timezone_set(timezone_name_from_abbr("", 3600, 0));
        $time = date("H");
        $advancedTime = "Current Time: ".date("H:i:s");

        if ($time >= "6" && $time < "12" ) {
            echo "<h1>Goodmorning</h1><img src='assets/images/morning.png'>";
        } elseif ($time >= "12" && $time < "18") {
            echo "<h1>Good Afternoon</h1><img src='assets/images/afternoon.png'>";
        } elseif ($time >= "18" && $time <= "23") {
            echo "<h1>Good Evening</h1><img src='assets/images/evening.png'>";
        } elseif ($time < "6") {
            echo "<h1>Goodnight</h1><img src='assets/images/night.png'>";
        }
        echo "<p> $advancedTime </p>";
    ?>
  </body>
</html>
