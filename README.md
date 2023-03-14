<!DOCTYPE html>
<title>User Information</title>
</head>
<body>
<body bgcolor="#E5FAFA">
<div align="center">
<img src="welcome_balloon.png" width="190" height="120">
</div>

<form name="reg" onsubmit="return demo();">

<fieldset style="width: 800px;margin: 0px auto; border:2px dashed #236D7E;" > 
<legend style="color:#E05273">User Information</legend>

<div style="color:#1C2085">

UserName:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="user" name="user" size="20" required><br><br>

Password:
&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" id="pass" name="pass" size="23" required><br><br>

Password confirmation:&thinsp;&thinsp;&thinsp;
<input type="password" id="passcon" name="passcon" size="23" required>
</div>
</fieldset>
<br>

<fieldset style="width: 800px;margin: 0px auto; border:2px dashed #236D7E;" > 
<legend style="color:#E05273">Personal Information</legend>
<div style="color:#1C2085">

Name:&nbsp;&nbsp;&nbsp;
<input type="text" id="name" name="name" size="18" required>&nbsp;&nbsp;&nbsp;

Birthday:&nbsp;&nbsp;&nbsp;
<input id="birthday" type="text" size="18" value="" required>
<a href="javascript:NewCssCal('birthday')"> 
<img src="cal.gif"  width="16" height="16" alt="Pick date"></a></td>&nbsp;&nbsp;&nbsp;


Gender:&nbsp;&nbsp;
<input type="radio" name="gender" value="Male"><span>Male</span>
<input type="radio" name="gender" value="Female" ><span>Female</span><br><br>

Country: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="country">
<option selected value="Default">(Please select a country with below options)</option>
<option value="In">India</option>
<option value="USA">America</option>
<option value="ch">China</option>
<option value="JN">Japan</option>
<option value="PK">Pakistan</option>
</select><br><br>

Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="address" name="address" size="53" required><br><br>

Email:&thinsp;&thinsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" id="email"  name="email" size="53" required><br><br>

Favorite color:
<select id="color">
  <option selected value="Default">(Please select your favorite color with below options)</option>
  <option value="red">Red</option>
  <option value="blue">Blue</option>
  <option value="green">Green</option>
  <option value="orange">Orange</option>
  <option value="black">Black</option>
  <option value="white">White</option>
  <option value="purple">Purple</option>
  <option value="brown">Brown</option>
  </select><br><br>

Hobbies:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Favorite food style:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Favorite drink:
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="hobbies[]" size="4" multiple>
  <option value="Animation">Animation</option>
  <option value="Gaming">Gaming</option>
  <option value="Reading">Reading</option>
  <option value="Cooking">Cooking</option>
  <option value="Dancing">Dancing</option>
  <option value="Drawing">Drawing</option>
  <option value="Drama">Drama</option>
  <option value="Karaoke">Karaoke</option>
  <option value="Music">Listening to Music</option>
  <option value="Sing">Singing</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="foodstyle[]" size="4" multiple>
  <option value="Japanese">Japanese</option>
  <option value="Korean">Korean</option>
  <option value="Chinese">Chinese</option>
  <option value="Portuguese">Portuguese</option>
  <option value="Thailand">Thailand</option>
  <option value="Vietnam">Vietnam</option>
  <option value="Vegetarian">Vegetarian</option>
  </select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="drinkstyle[]" size="4" multiple>
  <option value="Water">Water</option>
  <option value="Coffee">Coffee</option>
  <option value="Juice">Juice</option>
  <option value="Tea">Tea</option>
  <option value="Milk">Milk</option>
  <option value="Beer">Beer</option>
  <option value="Wine">Wine</option>
  <option value="Soda">Soda</option>
</select>
</fieldset> 
</div>
<br>

<div style="color:#B33EB1">
<I><center> *All fields must be entered before submitting the form</I></center><br>
<!--create submit button-->
</div>

<center><input type="submit" name="submit" value="Submit"></center>
<br>
</form>

<script type="text/javascript" src="datetimepicker_css.js">
</script>
