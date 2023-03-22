<!--
    Author: FONG IEK KIN BC000076
    Program description: This program is used to create cookie based on the input data
-->
<?php
$name = $_POST['name'];
$color = $_POST['color'];
$hobby = $_POST['hobby'];
$foodstyle = $_POST['foodstyle'];
$subject = $_POST['subject'];

$color_string = implode("," , $color);
$hobby_string = implode(",", $hobby);
$foodstyle_string = implode(",",$foodstyle);
$subject_string = implode(",", $subject);


if(isset($_COOKIE["name"]) && isset($_COOKIE["color"]) && isset($_COOKIE["hobby"]) && isset($_COOKIE["foodstyle"]) && isset($_COOKIE["subject"]))
{

}
else
{
    setcookie("name", $name, time() + 800000, "/");
    setcookie("color", $color_string, time() + 800000, "/");
    setcookie("hobby", $hobby_string, time() + 800000, "/");
    setcookie("foodstyle", $foodstyle_string, time() + 800000, "/");
    setcookie("subject", $subject_string, time() + 800000, "/");
}
header("Location: second_page.php");
?>