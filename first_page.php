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
  <option value="red" name="red">Red</option>
  <option value="blue" name="blue">Blue</option>
  <option value="green" name="green">Green</option>
  <option value="orange" name="orange">Orange</option>
  <option value="black" name="black">Black</option>
  <option value="white" name="white">White</option>
  <option value="purple" name="purple">Purple</option>
  <option value="brown" name="brown">Brown</option>
  </select><br><br>

Hobbies:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Favorite food style:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
Favorite subject:
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="hobbies[]" size="4" multiple>
  <option value="Animation"  name="Animation">Animation</option>
  <option value="Gaming"  name="Gaming">Gaming</option>
  <option value="Reading"  name="Reading" >Reading</option>
  <option value="Cooking"  name="Cooking" >Cooking</option>
  <option value="Dancing"  name="Dancing" >Dancing</option>
  <option value="Drawing"  name="Drawing">Drawing</option>
  <option value="Drama"  name="Drama">Drama</option>
  <option value="Karaoke"  name="Karaoke">Karaoke</option>
  <option value="Music"  name="Music" >Listening to Music</option>
  <option value="Sing"  name="Sing" >Singing</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="foodstyle[]" size="4" multiple>
  <option value="Japanese"  name="Japanese">Japanese</option>
  <option value="Korean"  name="Korean">Korean</option>
  <option value="Chinese"  name="Chinese">Chinese</option>
  <option value="Portuguese"  name="Portuguese">Portuguese</option>
  <option value="Thailand"  name="Thailand">Thailand</option>
  <option value="Vietnam"  name="Vietnam">Vietnam</option>
  <option value="Vegetarian"  name="Vegetarian">Vegetarian</option>
  </select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="subjectstyle[]" size="4" multiple>
  <option value="Marketing" name="Marketing" >Marketing</option>
  <option value="Accounting" name="Accounting">Accounting</option>
  <option value="Economics" name="Economics">Economics</option>
  <option value="Mathematics" name="Mathematics">Mathematics</option>
  <option value="History" name="History" >History</option>
  <option value="Art" name="Art">Art</option>
  <option value="Psychology" name="Psychology">Psychology</option>
  <option value="Science" name="Science">Science</option>
  <option value="Music" name="Music">Music</option>
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
