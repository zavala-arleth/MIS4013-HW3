<?php
function get_db_connection(){
    // Create connection
  $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "mis-4013-db1.mysql.database.azure.com", "Arlethadmin", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
