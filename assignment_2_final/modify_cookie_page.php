<!--
    Author: LEI KA LENG BC000987, LU ZHI JIAN BC004372
    Program description: This program is used to provide a UI for user to change their preference(setting)
-->
<?php
?>
<html>
<?php
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
    <!--use table to make better UI-->
    <table width = '60%' align = 'center'>
    <tr><td><br><br><br><br><br><br><br></td></tr>
    <tr>
    <td></td>
    <td>
    <!--after the submit button, the input data will be submit to modify_cookie.php by using POST method-->
    <form method = 'post' action = 'modify_cookie.php'>
    <fieldset>
    <legend>Setting</legend>
    <!--use table to make better UI-->
    <table align = 'center'>
    <tr>
    <td align = 'center' colspan = '2'>    
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
        <!--Create multiple selection box for hobbies-->
        <select id="hobby" name="hobby[]" size="4" multiple required>
          <option value="Animation" name="Animation">Animation</option>
          <option value="Gaming" name="Gaming">Gaming</option>
          <option value="Reading" name="Reading">Reading</option>
          <option value="Cooking" name="Cooking">Cooking</option>
          <option value="Dancing" name="Dancing">Dancing</option>
          <option value="Drawing" name="Drawing">Drawing</option>
          <option value="Drama" name="Drama">Drama</option>
          <option value="Karaoke" name="Karaoke">Karaoke</option>
          <option value="Music" name="Music">Listening to Music</option>
          <option value="Sing" name="Sing">Singing</option>
        </select>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--Create multiple selection box for food style-->
        <select id="foodstyle" name="foodstyle[]" size="4" multiple required>
          <option value="Japanese" name="Japanese">Japanese</option>
          <option value="Korean" name="Korean">Korean</option>
          <option value="Chinese" name="Chinese">Chinese</option>
          <option value="Portuguese" name="Portuguese">Portuguese</option>
          <option value="Thailand" name="Thailand">Thailand</option>
          <option value="Vietnam" name="Vietnam">Vietnam</option>
          <option value="Vegetarian" name="Vegetarian">Vegetarian</option>
        </select>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <!--Create multiple selection box for subjects-->
        <select id="subject" name="subject[]" size="4" multiple required>
          <option value="Marketing" name="Marketing">Marketing</option>
          <option value="Accounting" name="Accounting">Accounting</option>
          <option value="Economics" name="Economics">Economics</option>
          <option value="Mathematics" name="Mathematics">Mathematics</option>
          <option value="History" name="History">History</option>
          <option value="Art" name="Art">Art</option>
          <option value="Psychology" name="Psychology">Psychology</option>
          <option value="Science" name="Science">Science</option>
          <option value="Music" name="Music">Music</option>
        </select>
    </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <!--if press save submit button, cookie data will be change-->
        <td align = 'center'><input type = 'submit' id = 'save' name = 'save' value = 'save'></td>
        <!--if press cancel button, nothing happen on cookie and then go bace to second page(menu page)-->
        <td align = 'center'><input type = 'button' id = 'cancel' name = 'cancel' value = 'cancel' onclick ='window.location = "second_page.php"'></td>
    </tr>
    </table>
</fieldset>
</form>
</td>
<td></td>
</tr>
</table>
</html>