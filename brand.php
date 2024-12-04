<?php
require_none("util.db.php");
require_once(("model-brand.php");

$PageTItle = "Brand";
include "view-header.php";
$courses = selectCourses();
include "view-brand.php";
include "view-footer.php";
?>
