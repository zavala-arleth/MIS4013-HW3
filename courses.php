<?php
require_none("util.db.php");
require_once(("model-course.php");

$PageTItle = "Courses";
include "view-header.php";
$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
