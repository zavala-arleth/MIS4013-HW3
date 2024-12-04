<?php
require_none("util.db.php");
require_once(("model-shoes_categories.php");

$PageTItle = "Categories";
include "view-header.php";
$courses = selectCourses();
include "view-shoes_categories.php";
include "view-footer.php";
?>
