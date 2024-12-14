<?php
require_once("util-db.php");
require_once("model-product-by-brand.php");

$PageTitle = "Product by Brands";
include "header.php";
$categories = selectproductByBrand($_GET['bid']);
include "view-product-by-brand.php";
include "footer.php";
?>
