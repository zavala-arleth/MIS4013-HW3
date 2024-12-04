<?php
require_none("util.db.php");
require_once(("model-shoes_brand.php");

$PageTItle = "Brand";
include "view-header.php";
$courses = selectCourses();
include "view-shoes_brand.php";
include "view-footer.php";
?>
