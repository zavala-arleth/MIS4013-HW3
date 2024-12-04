<?php
require_once ("util-db.php");
require_once("model-reviews.php");
$pageTitle = "Reviews";
  include "header.php";
$reviews= selectreviews();
include "view-reviews.php";
include "footer.php";
?>
