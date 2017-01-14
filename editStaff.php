<?php

require_once("config/config.php");
require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    if($_SESSION['user_level'] < P_EDIT_STAFF) $page = "views/Errors/noPerm.php"; else $page = "views/editStaff.php";
    include("views/template.php");
} else {
    include("views/not_logged_in.php");
}
