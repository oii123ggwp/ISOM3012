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
				left: 610px;
        font-size: 25px;
			}
      p#p3{
				position: absolute;
				top: 520px;
				left: 1050px;
        font-size: 25px;
			}
     
		</style>
	</head>

<body id = "body_1" bgcolor= <?php echo $_COOKIE['color']?>>

<center><h1><font size="10">Recommanded Menu</font></h1></center>
<form>
<a  onclick="window.location = 'display_link/FoodStyle_display.php'">
<img style="margin: 160px 20px 25px 180px;"src="food.png" width="220" height="250"/></a><strong><p id="p1"><input type = "button" name= "submit" value= "Restaurant" onclick="window.location = 'display_link/FoodStyle_display.php'"></p></strong>

<a onclick="window.location = 'display_link/subject_display.php'">
<img style="margin: 160px 20px 25px 180px;"src="subject.png" width="220" height="250"/></a><strong><p id="p2"><input type = "button" name= "submit" value= "Subject_Information" onclick="window.location = 'display_link/subject_display.php'"></p></strong>

<a onclick="window.location = 'display_link/hobby_display.php'">
<img style="margin: 160px 20px 25px 180px;"src="hobby.png" width="220" height="250"/></a><strong><p id="p3"><input type = "button" name= "submit" value= "Hobby_Information" onclick="window.location = 'display_link/hobby_display.php'"></p></strong>
<center>
<br><br><br><br><br><br>
<a  href = "delete_cookie.php">Log out</a>
</form>

</body>
</html>