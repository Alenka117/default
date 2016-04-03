<?php
/**
 * SimpleLibrary config
 * @var array
 */
$cfg = [
    // database credentials
    "dbHost" => "localhost",
    "dbUser" => "root",
    "dbPass" => "",
    "dbBase" => "simplelibrary"
];

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "cs":
        //echo "PAGE CS";
        include("../langs/cs.php");//include check session CS
        break;
    default:
        //echo "PAGE EN - Setting Default";
        include("../langs/en.php");
        break;
}

?>