<!--
    Author: LEI KA LENG BC000987, LU ZHI JIAN BC004372
    Program description: This program is used to change cookie data
-->
<?php
session_start();//start the session

//if save button being click
if(isset($_POST['save'])){
    //save the data on session varible
    $_SESSION['hobby'] = $_POST['hobby'];//user select hobby 
    $_SESSION['foodstyle'] = $_POST['foodstyle'];//user select foodstyle 
    $_SESSION['subject'] = $_POST['subject'];//user select subject 

    //get the data from POST varible
    $hobby= $_POST['hobby'];
    $foodstyle= $_POST['foodstyle'];
    $subject= $_POST['subject'];

    //I can not add array into cookie, so I convert array into stirng
    $hobby_string = implode(",", $hobby);
    $foodstyle_string = implode(",",$foodstyle);
    $subject_string = implode(",", $subject);

    //set cookie value and it will expire after one day
    setcookie('hobby',$hobby_string, time() + 86400, "/");
    setcookie('foodstyle',$foodstyle_string, time() + 86400, "/");
    setcookie('subject',$subject_string, time() + 86400, "/");

    //read cookie
//    var_dump($_COOKIE['hobby']);
//    var_dump($_COOKIE['foodstyle']);
//    var_dump($_COOKIE['subject']);

    //after finish the process, go back to second page(menu page)
    header("Location: second_page.php");
}
else{
    echo "request error";
}
?>