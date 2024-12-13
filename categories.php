<?php
require_once("util-db.php");
require_once("model-categories.php");

$PageTitle = "Categories";
include "header.php";
$categories = selectcategories();
include "view-categories.php";
include "view-footer.php";
?>
