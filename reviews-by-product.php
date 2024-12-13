<?php
require_once("util-db.php");
require_once("model-reviews-by-product.php");

$PageTItle = "Reviews by Product";
include "view-header.php";
$categories = selectreviewsByProduct($_POST['id']);
include "view-reviews-by-product.php";
include "view-footer.php";
?>
