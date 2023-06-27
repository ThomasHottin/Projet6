<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="map.css" rel="stylesheet" />
    <title>map</title>
  </head>
  <body>

<section class="jours-container">
  <ul>
    <li><a href="?jour=lundi">lundi</a></li>
    <li><a href="?jour=mardi">mardi</a></li>
    <li><a href="?jour=mercredi">mercredi</a></li>
    <li><a href="?jour=jeudi">jeudi</a></li>
    <li><a href="?jour=vendredi">vendredi</a></li>
    <li><a href="?jour=samedi">samedi</a></li>
    <li><a href="?jour=dimanche">dimanche</a></li>
  </ul>
</section>

<section class="img">
    <img src="map.png" alt="map france">
</section>

<?php
    $tab = [
      "lundi" => ["Nord" => 12, "Sud" => 18, "Est" => 15, "Ouest" => 14, "Centre" => 12],
      "mardi" => ["Nord" => 13, "Sud" => 20, "Est" => 14, "Ouest" => 15, "Centre" => 14],
      "mercredi" => ["Nord" => 15, "Sud" => 21, "Est" => 16, "Ouest" => 14, "Centre" => 15],
      "jeudi" => ["Nord" => 14, "Sud" => 19, "Est" => 17, "Ouest" => 13, "Centre" => 15],
      "vendredi" => ["Nord" => 12, "Sud" => 18, "Est" => 18, "Ouest" => 12, "Centre" => 16],
      "samedi" => ["Nord" => 10, "Sud" => 20, "Est" => 16, "Ouest" => 9, "Centre" => 15],
      "dimanche" => ["Nord" => 14, "Sud" => 22, "Est" => 15, "Ouest" => 10, "Centre" => 18]
    ];

    if (isset($_GET['jour'])) {
      $jour = $_GET['jour'];

      if (isset($jour) && key_exists($jour, $tab)) {
        $tab = $tab[$jour];
      }
    }

    foreach ($tab as $region => $temperature) { 
      if ($region === "Nord") {
        echo '<p style="transform: translate(280px, -550px)">' . $temperature . ' °C</p>';
      } 
      if ($region === "Sud") {
        echo '<p style="transform: translate(300px, -250px)">' . $temperature . ' °C</p>';
      } 
      if ($region === "Est") {
        echo '<p style="transform: translate(460px, -500px)">' . $temperature . ' °C</p>';
      } 
      if ($region === "Ouest") {
        echo '<p style="transform: translate(120px, -530px)">' . $temperature . ' °C</p>';
      }  
      if ($region === "Centre") {
        echo '<p style="transform: translate(290px, -530px)">' . $temperature . ' °C</p>';
      }
    }
?>     

  </body>
</html>












