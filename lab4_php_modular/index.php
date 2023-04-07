<?php
$mod = $_REQUEST['mod'];

switch ($mod){
    case "home":
        require("home.php");
        break;
    case "Pengertian":
        require("Pengertian.php");
        break;
    case "fungsi":
        require("fungsi.php");
        break;
    default :
        require("home.php");

}
?>