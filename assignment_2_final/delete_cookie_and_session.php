<!--
    Author: FONG IEK KIN BC000076
    Program description:  This program is used to delete all the cookie
-->
<?php
//Start the session
session_start();

//clear all the cookie
setcookie("name", $name, time() - 800000, "/");
setcookie("color", $color_string, time() - 800000, "/");
setcookie("hobby", $hobby_string, time() - 800000, "/");
setcookie("foodstyle", $foodstyle_string, time() - 800000, "/");
setcookie("subject", $subject_string, time() - 800000, "/");

//clear all the session varible
session_unset();
//close session
session_destroy();

//go back first page
header("Location: first_page.php");

?>