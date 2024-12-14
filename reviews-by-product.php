<?php
require_once("util-db.php");
require_once("model-reviews-by-product.php");

$PageTitle = "Reviews by Product";
include "header.php";
$review = selectreviewsByProduct($_POST['pid']);
include "view-reviews-by-product.php";
include "footer.php";
?>
