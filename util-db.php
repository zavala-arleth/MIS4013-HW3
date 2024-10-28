<?php
function get_db_connection(){
    // Create connection
 $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "mis-4013-db1.mysql.database.azure.com", "Arlethadmin", "JAn8qx6T1234", "mis-4013-db1", 3306, MYSQLI_CLIENT_SSL);
    if ($con->connect_error) {
      return false;
    }
    return $con;
}
?>
