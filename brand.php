<?php
require_once ("util-db.php");
require_once("model-brand.php");
$pageTitle = "Shoe Brands";
  include "header.php";
$instructors= selectInstructors();
include "view-brand.php";
include "footer.php";
?>
