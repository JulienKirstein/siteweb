<?php
// We check if the password is equal to "original".
if (isset($_GET['password']))
        {
            if ($_GET['password'] == "original")
                {
                    require("model_admin.php");
                    require("viewadmin.php");
                }
            else
                {
                    require("viewlogin.php");
                }
        }
?>