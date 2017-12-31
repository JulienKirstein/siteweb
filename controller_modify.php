<?php
// We get the id of the group that we have to modify from the data base.
$to_delete = $_GET['modify'];
require("model_modify.php");
require("model_delete.php");
require("controller_2.php");
?>