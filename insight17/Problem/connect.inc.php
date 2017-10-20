<?php
/*
This class is used to connect to the MySQL database.
create object as follows :
$db=new connectDB($servername,$username,$password);
$conn = db->createConnection();
now $conn is handle of the SQL DB.
*/
class connectDB
{
  private $servername;
  private $username;
  private $password;

public function __construct($val1,$val2,$val3)
  {
    $this->servername=$val1;
    $this->username=$val2;
    $this->password=$val3;
  }
public function createConnection() //returns handle to db if connected successfully
  {
    $conn = new mysqli($this->servername,$this->username,$this->password);
    if($conn->connect_error)
      die("connection failed ". $conn->connect_error);
      
      $sql = "use `decoders`";

      if(!$conn->query($sql))
      	echo "failed to select the datatbase ".$conn->error;
    return $conn;
  }
}
 ?>
