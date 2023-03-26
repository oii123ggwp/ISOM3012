<!-- This program is used to display the information for the users to fill in and verify 
    whether the data is correct. 
    Author: BC000314, CHAN CHENG LAM
            BC000076, FONG IEK KIN
            BC005351, ZHENG BOWEN
     Date: 22,March, 2023     
                                      -->
<!DOCTYPE html>
<html>
<?php session_start();

if (!isset($_SESSION['user']))
{
?>
<head>
  <title>User Information</title>
</head>
<!--Set the background color and insert an image -->
<body bgcolor="#E5FAFA">
  <div align="center">
    <img src="welcome_balloon.png" width="190" height="120">
  </div>
  <!--When clicks on the submit button, executes the function, form links to the another 
  php file with the post method -->
  <form name="reg" onsubmit = "return formValidation();" method = "post" action = "create_cookie_and_session.php">
    
  <!--Use "fieldset" for designing the layout-->
  <fieldset style="width: 800px;margin: 0px auto; border:2px dashed #236D7E;">
      <legend style="color:#E05273">User Information</legend>
      <div style="color:#1C2085">
  
         <!--Create the UserName textbox-->
        UserName:
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="user" name="user" size="20" placeholder="Letters and Numbers Only"><br><br>
        <!--Create the Password textbox-->
        Password:
        &ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" id="pass" name="pass" size="23" placeholder="6-15 characters"><p style="line-height: 0.4; font-size:x-small;font-weight:300;">(at least 1 number, 1 Uppercase letter and 1 lowercase letter)</p>
         <!--Create the Password confirmation textbox-->
        Password confirmation:&thinsp;&thinsp;&thinsp;
        <input type="password" id="passcon" name="passcon" size="23">
      </div>
    </fieldset>
    <br>
    <!--Use "fieldset" for designing the layout-->
    <fieldset style="width: 800px;margin: 0px auto; border:2px dashed #236D7E;">
      <legend style="color:#E05273">Personal Information</legend>
      <div style="color:#1C2085">
      
        <!--Create the Name textbox-->
        Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="name" name="name" size="18" placeholder="Letters Only">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--Create the Birthday datebox-->
        Birthday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="birthday" name="birthday" type="date"  max="1111-13-13">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--Create the gender radio button-->
        Gender:&nbsp;&nbsp;
        <input type="radio" name="gender" value="Male"><span>Male</span>
        <input type="radio" name="gender" value="Female"><span>Female</span><br><br>
        <!--Create the country selection box-->
        Country: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="country" name="country">
          <option selected value="Default">(Please select a country with below options)</option>
          <option value="In">India</option>
          <option value="USA">America</option>
          <option value="ch">China</option>
          <option value="JN">Japan</option>
          <option value="PK">Pakistan</option>
        </select><br><br>
        <!--Create the Adress textbox-->
        Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="address" name="address" size="53"><br><br>
        <!--Create the Email textbox-->
        Email:&thinsp;&thinsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="email" name="email" size="53"><br><br>
         <!--Create multiple selection box for favourite color -->
        Favorite color:
        <select id="color" name="color">
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
          <!--Create multiple selection box for hobbies-->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="hobby" name="hobby[]" size="4" multiple>
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
        <!--Create multiple selection box for food style-->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="foodstyle" name="foodstyle[]" size="4" multiple>
          <option value="Japanese" name="Japanese">Japanese</option>
          <option value="Korean" name="Korean">Korean</option>
          <option value="Chinese" name="Chinese">Chinese</option>
          <option value="Portuguese" name="Portuguese">Portuguese</option>
          <option value="Thailand" name="Thailand">Thailand</option>
          <option value="Vietnam" name="Vietnam">Vietnam</option>
          <option value="Vegetarian" name="Vegetarian">Vegetarian</option>
        </select>
        <!--Create multiple selection box for subjects-->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        <select id="subject" name="subject[]" size="4" multiple>
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
    </fieldset>
    </div>
    <br>
    <div style="color:#B33EB1">
      <I>
        <center> *All fields must be entered before submitting the form
      </I></center><br>
    </div>
    <!--create submit button-->
    <center><input type="submit" name="submit" value="Submit"></center>
    <br>
  </form>
  <?php }
  else
  {
    //if session varible of user exist, not need to fill the info again
    header("Location: create_cookie_and_session.php");
  }
  ?>
  <script>
    function formValidation() {
      var user = document.reg.user;   //create a variable to store the user's username 
      var psd = document.reg.pass;   //create a variable to store the user's password
      var name = document.reg.name;  //create a variable to store the user's name 
      var birthday = document.reg.birthday;  //create a variable to store the user's birthday
      var gender = document.reg.gender;   //create a variable to store the user's gender
      var country = document.reg.country;  //create a variable to store the user's country
      var address = document.reg.address;  //create a variable to store the user's address
      var email = document.reg.email;  //create a variable to store the user's email
      var color = document.reg.color;  //create a variable to store the user's favourite color
      var hobby = document.reg.hobby; //create a variable to store the user's hobbies
      var foodstyle = document.reg.foodstyle;  //create a variable to store the user's favourite food style
      var subject = document.reg.subject;  //create a variable to store the user's favourite subject
     
      //Validation is performed in order. If the input are all corrected, then it will return true.
      //If one input is incorrect, it will return false and ask the user to modify.
      
      if (user_Valid(user)) {
        if (pass_valid(psd)) {
          if (passcon_valid()) {
            if (name_valid(name)) {
              if (birthday_valid(birthday)) {
                if (gender_valid(gender)) {
                  if (country_valid(country)) {
                    if (address_valid(address)) {
                      if (email_valid(email)) {
                        if (color_valid(color)) {
                          if (hobby_valid()) {
                            if (food_valid()) {
                              if (subject_valid()) {
                                
                                return true;  
                              }
                              else
                              {
                                return false;
                              }
                            }
                            else
                            {
                              return false;
                            }
                          }
                          else
                          {
                            return false;
                          }
                        }
                        else
                        {
                          return false;
                        }
                      }
                      else
                      {
                        return false;
                      }
                    }
                    else
                    {
                      return false;
                    }
                  }
                  else
                  {
                    return false;
                  }
                }
                else
                {
                  return false;
                }
              }
              else
              {
                return false;
              }
            }
            else
            {
              return false;
            }
          }
          else
          {
            return false;
          }
        }
        else
        {
          return false;
        }
     }
      else
      {
        return false;
      }
    }
    function user_Valid(user) { //function used to validate the user name written in letters and numbers
      var letters = /^[A-Za-z0-9]+$/;
      if (!user.value) { //if not input, alert to input user name and focus
        alert("Please input your user name!");
        user.focus();
        return false;
      } else if (user.value.match(letters)) { //if written in letters, return true
        return true;
      } else { //otherwise alert to input letters and focus
        alert('User name must have alphabet characters or numeric digits only!');
        user.focus();
        return false;
      }
    }
    function pass_valid(psd) { //function used to validate password 6 to 15 characters    
      //which contain at least one numeric digit, one uppercase and one lowercase letter
      var psd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;
      if (pass.value.match(psd)) {
        return true;
      } else { // otherwise will display alert window and focus
        alert("Password should be 6 to 15 characters, " +
          "at least one numeric digit, one uppercase and one lowercase letter");
        pass.focus();
        return false;
      }
    }
    function passcon_valid() {//function used to ensure that user enter password is the same as first time
      var psdcon = document.getElementById("passcon").value; //get the first time password value
      var pass = document.getElementById("pass").value; //get the second time password value
      if (psdcon == pass) { //if they are equal, return true
        return true;
      } else { // otherwise will display alert window and focus
        alert("The password and confirming password disagree! Please input the same passwords!")
        passcon.focus();
        return false;
      }
    }
    function name_valid(name) { //function used to validate the name written in letters
      var letters = /^[A-Za-z]+$/;
      if (!name.value) { //if not input, alert to input name and focus
        alert("Please input your name!");
        name.focus();
        return false;
      } else if (name.value.match(letters)) { //if written in letters, return true
        return true;
      } else { //otherwise alert to input letters and focus
        alert('Name must have alphabet characters only!');
        name.focus();
        return false;
      }
    }
    function birthday_valid(birthday) { //function used to vetify the birthday date
      var dateformat = /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
      if (birthday.value.match(dateformat)) { //only can input numbers for date 
        return true;
      } else { // if not, alert and focus
        alert("Invalid date format!");
        birthday.focus();
        return false;
      }
    }
    function gender_valid(gender) { //function used to verify the gender 
      //if the user doesn't choose any options, alert and return false
      if ((!gender[0].checked) && (!gender[1].checked)) {
        alert("Please select a gender !");
        return false;
      } else
        return true;//otherwise, return true
    }
    function country_valid(country) { // function used to verify contry selection
      if (country.value == "Default") { //if not select, alert, focus and return false
        alert('Please select your Country from the list');
        country.focus();
        return false;
      } else {
        return true;//otherwise, return true
      }
    }
     function address_valid(address) {// function used to verify address
      if (!address.value) { // if empty, alert and focus
        alert("Please input your Address!");
        address.focus();
        return false;
      } else {
        return true;//otherwise, return true
      }
    }
    function email_valid(email) { // function used to verify email
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (email.value.match(mailformat)) {//if the user input meet the format, return true
        return true;
      } else { //if not match, alert, focus and return false
        alert("You have entered an invalid email address!");
        email.focus();
        return false;
      }
    }
    function color_valid(color) { //function used to verify color selection
      if (color.value == "Default") { //if not select, alert focus and return false
        alert('Select your favourate color from the list');
        color.focus();
        return false;
      } else {
        return true;//otherwise, return true
      }
    }
    function hobby_valid() { //function used to verify the hobby selection
      //if not select any options, alert and return false
      if (document.forms["reg"]["hobby[]"].selectedIndex == -1) {
        alert("Please select your hobbies.");
        return false;
      } else {
        return true;//otherwise, return true
      }
    }
    function food_valid() { //function used to verify foodstyle selection
      if (document.forms["reg"]["foodstyle[]"].selectedIndex == -1) {
        //if not select any options, alert and return false
        alert("Please select foodstyles you like.");
        return false;
      } else {
        return true;//otherwise, return true
      }
    }
    function subject_valid() { //function used to verify drinkstyle selection
      if (document.forms["reg"]["subject[]"].selectedIndex == -1) {
        //if not select any options, alert and return false
        alert("Please select subjects you like.");
        return false;
      } else {
        alert("Form upload successfully!")
        return true; //otherwise, return true
      }
    }
    var today = new Date(); //create a variable to store the Date object
    var dd = today.getDate(); //create a variable to store the day
    var mm = today.getMonth() + 1; //create a variable to store the month
    var yyyy = today.getFullYear(); //create a variable to store the year
    if (dd < 10) { 
      dd = '0' + dd
    }
    if (mm < 10) {
      mm = '0' + mm
    }
    //set the date format
    today = yyyy + '-' + mm + '-' + dd;
    // here shows that date after today not allowed
    document.getElementById("birthday").setAttribute("max", today);
  </script>
</body>
</html>
