<!--
    Author: FONG IEK KIN
    Program description:  This program is used to delete all the cookie
-->
<?php
setcookie("name", $name, time() - 800000, "/");
setcookie("color", $color_string, time() - 800000, "/");
setcookie("hobby", $hobby_string, time() - 800000, "/");
setcookie("foodstyle", $foodstyle_string, time() - 800000, "/");
setcookie("subject", $subject_string, time() - 800000, "/");

header("Location: first_page.php");

?>