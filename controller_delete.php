<?php
// We get the id of the group that we have to delete from the data base.
$to_delete = $_GET['delete'];
require("model_delete.php");
require("model_admin.php");
?>