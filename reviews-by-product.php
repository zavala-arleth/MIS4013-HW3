<?php
require_once("util-db.php");
require_once("model-reviews-by-product.php");

$PageTitle = "Reviews by Product";
include "header.php";
$categories = selectreviewsByProduct($_POST['id']);
include "view-reviews-by-product.php";
include "footer.php";
?>
