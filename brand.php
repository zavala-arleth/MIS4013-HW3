<?php
require_once ("util-db.php");
require_once("model-brand.php");
$pageTitle = "Shoe Brands";
  include "header.php";
$brand= selectbrand();
include "view-brand.php";
include "footer.php";
?>
