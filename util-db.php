<?php
function get_db_connection(){
$conn = new mysqli(’gordonmis4013hw3.mysql.database.azure.com’, ‘gord0065’, ‘Pinkey227)’, ‘hw3_database’);
  }
 if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
