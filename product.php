<?php
require_once ("util-db.php");
require_once("model-product.php");
$pageTitle = "Products";
  include "header.php";
$brand= selectproduct();
include "view-product.php";
include "footer.php";
?>
