<?php

/**
 * Room
 */
class Room {

  private $id;
  private $name;
  private $objets = array();
  private $connexion;

  public function __construct($id, $name = '', $connexion = '') {
    $this->id = $id;
    $this->name = $name;
    if ($connexion != '') {
      $this->connexion = $connexion;
    }
    else{
      $this->connexion = new Connexion();
    }
      $resultObjects = $this->connexion->select("*", "objects", "Room = " . $id);
      if ($resultObjects->num_rows > 0){
        while ($rowObjects = $resultObjects->fetch_assoc()){
          $resultAlarms = $this->connexion->select("*", "alarm", "ObjectID = " . $rowObjects["ID"]);
          $resultLights = $this->connexion->select("*", "light", "ObjectID = " . $rowObjects["ID"]);
          $resultComputers = $this->connexion->select("*", "computer", "ObjectID = " . $rowObjects["ID"]);
          $resultShutters = $this->connexion->select("*", "shutters", "ObjectID = " . $rowObjects["ID"]);
          if ($resultAlarms->num_rows > 0){
            $this->objects[$rowObjects["ID"]] = 'Alarm';
          }
          else if ($resultLights->num_rows > 0){
            $this->objects[$rowObjects["ID"]] = 'Light';
          }
          else if ($resultComputers->num_rows > 0){
            $this->objects[$rowObjects["ID"]] = 'Computer';
          }
          else if ($resultShutters->num_rows > 0){
            $this->objects[$rowObjects["ID"]] = 'Shutters';
          }
        }
      }
    }

    public function displayRoomContent() {
      foreach ($this->objects as $index => $type) {
        echo $type . " : ";
        echo $this->getStatus($index);
        if ($this->getStatus($index) == "off"){
          echo "<button>Turn On</button>";
        } else{
          echo "<button>Turn Off</button>";
        }
        echo "<br>";
      }
    }

  public function getName(){
    return $this->name;
  }

  public function getId(){
    return $this->id;
  }

  public function getObjects(){
    return $this->objects;
  }

  public function getObject($index){
    return $this->objects[$index];
  }

  public function getStatus($index){
    $resultStatus = $this->connexion->select("Status", "objects", "ID = " . $index);
    $rowObjects = $resultStatus->fetch_assoc();
    return ! $rowObjects["Status"] ? "off" : "on";
  }
}
