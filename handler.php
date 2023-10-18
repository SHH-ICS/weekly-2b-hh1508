<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['fname'] ) ){
      $radius = $_POST['fname'];
     
      echo "<p>".$radius / 2."</p>";
    }
    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = \n";
    echo "<p>Circumference = \n";
    ?>
    
  </body>
  
</html>
