<!--
    Author: FONG IEK KIN BC000076
    Program description: This program is used to create cookie based on the input data
-->
<?php
//Start the session
session_start();

if(isset($_SESSION['user']))//if session varible of user exist
{
    //get the user data from seesion varible
    $name = $_SESSION['name'];//name data
    $color = $_SESSION['color'];//color data
    $hobby = $_SESSION['hobby'];//hobby data
    $foodstyle = $_SESSION['foodstyle'];//foodstyle data
    $subject = $_SESSION['subject'];//subject data

    //I can not add array into array, so I convert array into stirng
    $hobby_string = implode(",", $hobby);
    $foodstyle_string = implode(",",$foodstyle);
    $subject_string = implode(",", $subject);

    //use the user data from session varible to create cookie 
    setcookie("name", $name, time() + 86400, "/");
    setcookie("color", $color, time() + 86400, "/");
    setcookie("hobby", $hobby_string, time() + 86400, "/");
    setcookie("foodstyle", $foodstyle_string, time() + 86400, "/");
    setcookie("subject", $subject_string, time() + 86400, "/");
}
else//if session varible of user not exist
{
    //create session variable to store user data
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['hobby'] = $_POST['hobby'];
    $_SESSION['foodstyle'] = $_POST['foodstyle'];
    $_SESSION['subject'] = $_POST['subject'];

    //get the user data by using POST method
    $name = $_POST['name'];
    $color = $_POST['color'];
    $hobby = $_POST['hobby'];
    $foodstyle = $_POST['foodstyle'];
    $subject = $_POST['subject'];

    //I can not add array into array, so I convert array into stirng
    $hobby_string = implode(",", $hobby);
    $foodstyle_string = implode(",",$foodstyle);
    $subject_string = implode(",", $subject);

    //use the user data to create cookie
    setcookie("name", $name, time() + 86400, "/");
    setcookie("color", $color, time() + 86400, "/");
    setcookie("hobby", $hobby_string, time() + 86400, "/");
    setcookie("foodstyle", $foodstyle_string, time() + 86400, "/");
    setcookie("subject", $subject_string, time() + 86400, "/");
}
//go to second page(menu page)
header("Location: second_page.php");
?>