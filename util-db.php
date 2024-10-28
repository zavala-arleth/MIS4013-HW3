<?php
function get_db_connection(){
    // Create connection
 $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem"", NULL, NULL);
mysqli_real_connect($conn, "mis-4013-db1.mysql.database.azure.com", "Arlethadmin", "JAn8qx6T1234", "mis-4013-db1", 3306, MYSQLI_CLIENT_SSL);
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
