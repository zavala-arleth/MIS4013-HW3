<?php
require_none("util.db.php");
require_once("model-courses-by-categories.php");

$PageTItle = "Categories by Brands";
include "view-header.php";
$categories = selectCategoriesByBrand($_GET['id']);
include "view-categories-by-brand.php";
include "view-footer.php";
?>
