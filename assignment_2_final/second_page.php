<!--
	Authors: WANG RUNGE BC001767; FONE IEK KIN BC000076
	Program description: a UI allow user to select the what type of link to show,allow user to change the their setting of preference
						and allow user to log out to clear all the cookie and close the session.
-->
<!DOCTYPE html>
<!--Start the session-->
<?php session_start();?>
<html>

<title>Menu</title>
<head>

		<meta charset="UTF-8">
		<style>
		p#p1{
				position: absolute;
				top: 520px;
				left: 130px;
       			font-size: 25px;
			}
      p#p2{
				position: absolute;
				top: 520px;
				left: 570px;
        		font-size: 25px;
			}
      p#p3{
				position: absolute;
				top: 520px;
				left: 1000px;
				font-size: 25px;
			}
		</style>
	</head>
<?php
if(isset($_SESSION['user']))//check if session variable of user exist
{
	//base on the color data from cookie, select a background jpg which match the cookie color
	if($_COOKIE['color']=="red"){echo "<body style='background:url(red.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="blue"){echo "<body style='background:url(blue.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="green"){echo "<body style='background:url(green.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="orange"){echo "<body style='background:url(orange.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="black"){echo "<body style='background:url(black.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="white"){echo "<body style='background:url(white.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="purple"){echo "<body style='background:url(purple.jpg);background-repeat:no-repeat;background-size:cover;'>";}
	elseif($_COOKIE['color']=="brown"){echo "<body style='background:url(brown.jpg);background-repeat:no-repeat;background-size:cover;'>";}
?>
 <div style="color:#516176">
<center><font size="7">Recommended Menu</font></center>
<center><font size="5">Welcome <?php echo $_SESSION['user']?></font></center>
</div>
<form>
<!--if user click this image, it will open new page and display the FoodStyle links-->
<a  onclick="window.location = 'display_link/FoodStyle_display.php'">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="margin: 160px 20px 25px 80px;"src="food.png" width="220" height="250"/></a>
<!--if user click this button, it will open new page and display the FoodStyle links -->
<strong><p id="p1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Restaurant" onclick="window.location = 'display_link/FoodStyle_display.php'"></p></strong>

<!--if user click this image, it will open new page and display the subject links-->
<a onclick="window.location = 'display_link/subject_display.php'">
<img style="margin: 160px 20px 25px 195px;"src="subject.png" width="220" height="250"/></a>
<!--if user click this button, it will open new page and display the subject links -->
<strong><p id="p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Subject Information" onclick="window.location = 'display_link/subject_display.php'"></p></strong>

<!--if user click this image, it will open new page and display the hobby links-->
<a onclick="window.location = 'display_link/hobby_display.php'">
<img style="margin: 160px 20px 25px 190px;"src="hobby.png" width="220" height="250"/></a>
<!--if user click this button, it will open new page and display the hobby links-->
<strong><p id="p3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Hobby Information" onclick="window.location = 'display_link/hobby_display.php'"></p></strong>
<center>
<br><br><br><br><br><br><br><br><br><br>
<!--this is a link allow user to change cookie and session of user's preference-->
<a  href = "modify_cookie_page.php"><font size="4">Change setting</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--this is a link to allow user to clear all cookie and session-->
<a  href = "delete_cookie_and_session.php"><font size="4">Log out</font></a>
</form>
<?php }
else//if session variable of user is not exist, go back to reg page
{
	header("Location: first_page.php");
}
?>
</body>
</html>