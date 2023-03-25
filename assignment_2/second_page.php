<!--
	Authors: WANG RUNGE BC001767; FONE IEK KIN BC000076
-->
<!DOCTYPE html>
<html>

<title>Menu</title>
<head>

		<meta charset="UTF-8">
		<style>
		p#p1{
				position: absolute;
				top: 520px;
				left: 240px;
       			font-size: 25px;
			}
      p#p2{
				position: absolute;
				top: 520px;
				left: 650px;
        		font-size: 25px;
			}
      p#p3{
				position: absolute;
				top: 520px;
				left: 1080px;
				font-size: 25px;
			}
		</style>
	</head>
<?php
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
		</div>
<form>
<a  onclick="window.location = 'display_link/FoodStyle_display.php'">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img style="margin: 160px 20px 25px 180px;"src="food.png" width="220" height="250"/></a><strong><p id="p1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Restaurant" onclick="window.location = 'display_link/FoodStyle_display.php'"></p></strong>


<a onclick="window.location = 'display_link/subject_display.php'">
<img style="margin: 160px 20px 25px 180px;"src="subject.png" width="220" height="250"/></a><strong><p id="p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Subject Information" onclick="window.location = 'display_link/subject_display.php'"></p></strong>

<a onclick="window.location = 'display_link/hobby_display.php'">
<img style="margin: 160px 20px 25px 180px;"src="hobby.png" width="220" height="250"/></a><strong><p id="p3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" name= "submit" value= "Hobby Information" onclick="window.location = 'display_link/hobby_display.php'"></p></strong>
<center>
<br><br><br><br><br><br><br><br><br><br><br><br>
<a  href = "delete_cookie.php">Log out</a>
</form>
</body>
</html>