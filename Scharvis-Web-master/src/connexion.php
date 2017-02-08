<?php

/**
 * Connexion
 */
class Connexion {

  private $conn;
  private $sqlQuery;

  public function __construct() {
    $user = 'root';
    $password = 'root';
    $db = 'Scharvis';
    $host = 'localhost';
    $port = 8889;

    $this->conn = new mysqli("$host:$port", $user, $password, $db);
    if ($this->conn->connect_error){
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "Successfully connected <br>";
  }

  public function select($what, $where, $condition = '') {
    $this->sqlQuery =  "SELECT " . $what . " FROM " . $where;
    if ($condition != null){
      $this->sqlQuery .= " WHERE " . $condition;
    }
    $this->sqlQuery .= ";";
    $result = $this->conn->query($this->sqlQuery);
    return $result;
  }

  public function getSqlQuery() {
    return $this->sqlQuery;
  }
}
