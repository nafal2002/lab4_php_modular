<?php

$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : "home";

switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about.php");
        break;
    default:
        require("home.php");
}
?>