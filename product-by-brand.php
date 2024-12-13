<?php
require_once("util-db.php");
require_once("model-product-by-brand.php");

$PageTItle = "Product by Brands";
include "view-header.php";
$categories = selectproductByBrand($_GET['brand_id']);
include "view-product-by-brand.php";
include "view-footer.php";
?>
