<?php
class Database
{
  private $host = "localhost";
  private $db_name = "php_oop_crud_level_1";
  private $username = "root";

  private $password = "";

  public function __construct($host, $db_name, $username)
  {
    $this->host = $host;
    $this->db_name = $db_name;
    $this->username = $username;
  }

  public function conn()
  {
    $this->conn = mysqli_connect($this->host, $this->username, $this->password);
    if (!$this->conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $this->conn;
  }
}
