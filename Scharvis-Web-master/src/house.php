<?php
include 'connexion.php';
include 'roomClass.php';
/**
 * House
 */

class House {

  private $connexion;
  private $rooms = array();

  public function __construct() {
    $this->connexion  = new Connexion();
    $resultRooms = $this->connexion->select("*", "rooms");
    $i = 0;
    while ($rowRooms = $resultRooms->fetch_assoc()){
      $this->rooms[$i++] = new Room($rowRooms["ID"], $rowRooms["Name"], $this->connexion);
    }
  }

  public function displayRooms()  {
    echo "<table>";
    for ($i=0; $i < count($this->rooms); ++$i) {
      echo "<td style = 'width:auto;border:1px solid black;'>";
      echo "<a href='room.php?id=". $this->rooms[$i]->getId() . "'>" . $this->rooms[$i]->getName() . "</a><hr>";
      foreach ($this->rooms[$i]->getObjects() as $key => $value) {
        echo $value . " : " ;
        echo $this->rooms[$i]->getStatus($key) . "<br>";
      }
      echo "</td>";
    }
    echo "</table>";
  }
}
