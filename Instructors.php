<?php
require_once ("util-db.php");
require_once("model-shoes.php");
$pageTitle = "Shoes";
  include "header.php";
$instructors= selectInstructors();
include "view-shoes.php";
include "footer.php";
?>
