<?php
session_start();
session_destroy();
header("location:http://localhost/foodfusion/admin/admin_login.php");
?>