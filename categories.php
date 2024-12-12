<?php
require_none("util-db.php");
require_once("model-categories.php");

$PageTItle = "Categories";
include "view-header.php";
$categories = selectcategories();
include "view-categories.php";
include "view-footer.php";
?>
