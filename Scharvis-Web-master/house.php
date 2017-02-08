<html>
  <?php include "includes/head.php"; ?>
  <body>
      <h1>House Overview</h1>
      <?php
      include 'src/house.php';
        $house = new House();
        $house->displayRooms();
      ?>
  <body>
</html>
