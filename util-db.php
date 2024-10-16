<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli( 'mis-4013-db1.mysql.database.azure.com', 'Arlethadmin', 'JAn8qx6T1234', 'MIS4013-HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
