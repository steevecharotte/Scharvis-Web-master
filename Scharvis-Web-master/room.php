<html>
<?php include "includes/head.php";?>
<?php include "src/connexion.php";?>
<?php include "src/roomClass.php";?>

<h1>Room View</h1>

<?php
  $room = new Room($_GET["id"]);
  $room->displayRoomContent();
 ?>
</html>
