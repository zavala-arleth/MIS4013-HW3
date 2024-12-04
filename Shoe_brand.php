<?php
require_once ("util-db.php");
require_once("model-shoe_brand.php");
$pageTitle = "Shoe Brands";
  include "header.php";
$instructors= selectInstructors();
include "view-shoe_brand.php";
include "footer.php";
?>
