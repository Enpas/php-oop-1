<?php

  require_once __DIR__ . "/Movie.php";

  $first_Film = new Movie("Dracula Untold", 2014, "Horror/Action");
  $second_Film = new Movie("Left Behind", 2014, "Thriller/Adventure");
  $third_Film = new Movie("Van Helsing", 2013, "Horror/Action");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php movie</title>
</head>

<body>

  <h2>Films viewed: <?php echo Movie::getCounter() ?></h2>

  <h3>First Film</h3>
  <ul>
    <li>Title: <?php echo $first_Film->title ?></li>
    <li>Year: <?php echo $first_Film->year ?></li>
    <li>Genre: <?php echo $first_Film->genre ?></li>
    <li>Recommended: <?php echo $first_Film->getRecommended() ?></li>
  </ul>

  <h3>Second Film</h3>
  <ul>
    <li>Title: <?php echo $second_Film->title ?></li>
    <li>Year: <?php echo $second_Film->year ?></li>
    <li>Genre: <?php echo $second_Film->genre ?></li>
    <li>Recommended: <?php echo $second_Film->getRecommended() ?></li>
  </ul>
  
  <h3>Third Film</h3>
  <ul>
    <li>Title: <?php echo $third_Film->title ?></li>
    <li>Year: <?php echo $third_Film->year ?></li>
    <li>Genre: <?php echo $third_Film->genre ?></li>
    <li>Recommended: <?php echo $third_Film->getRecommended() ?></li>
  </ul>

  
</body>
</html>