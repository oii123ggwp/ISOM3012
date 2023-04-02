<!--
    Author: FONG IEK KIN BC000076
    Program description: Display the link and Picture related to selected options in a table. Each time we will display 4 links in the table.
-->
<?php
require ("hobby_data.php");// the link data
require ("randomly_selected_index.php");//function related to randomly select index with no same index

//base on the color data from cookie, select a background jpg which match the cookie color
if($_COOKIE['color']=="red"){echo "<body style='background:url(bg_image/red.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="blue"){echo "<body style='background:url(bg_image/blue.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="green"){echo "<body style='background:url(bg_image/green.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="orange"){echo "<body style='background:url(bg_image/orange.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="black"){echo "<body style='background:url(bg_image/black.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="white"){echo "<body style='background:url(bg_image/white.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="purple"){echo "<body style='background:url(bg_image/purple.jpg);background-repeat:no-repeat;background-size:cover;'>";}
elseif($_COOKIE['color']=="brown"){echo "<body style='background:url(bg_image/brown.jpg);background-repeat:no-repeat;background-size:cover;'>";}

$random_hobby_link_list = randomly_selected_item_index_noSame(4, 10);//get array contain random number which index of $selected_hobby_list_withImage[any num][any num][number use here]
                                                                          //AND there is no same number in this array
                                                                          //we want to show 4 link, and each hobby type have 10 link

function display_hobby($selected_hobby_list_withImage, $random_hobby_link_list)//This function is used to display link and the related image and related hobby type name
{
    //title of the page
    echo"<div style='text-align:center; color:#43379F; font-size:20px;' >Food Style</div>";

    //use for loop to insert row and row data
    for($i = 0; $i < count($selected_hobby_list_withImage); $i++)
    {
        //this two varible is used to make sure add one image only in each table
        $image_added = false;//each time we create table, we assume image is not added
        $first_add_link = true;//each time we create table, we assume the first link is not added
        //create a table to show the content
        echo"<table style='border: 5px#A79C8D dashed;' cellpadding='10' border='1' width = '70%' align = 'center'>";
        echo"</br>";
        //use foreach to get the random index which is used to randomly select the link
        foreach($random_hobby_link_list as $index)
        {
            //if image is not added and it is first time to add link
            if ($image_added !== true || $first_add_link === true)
                {
                //first we create a new row and we insert a image
                echo "<tr><td width = '15%' rowspan = '4'><img src ='".$selected_hobby_list_withImage[$i][1]."'width='160' height='120'>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$selected_hobby_list_withImage[$i][2]."<br><br><br>";
                echo "</td>";
                echo "<td>";
                echo "<br><br><br>";
                //then we insert the link
                echo "<a href ='".$selected_hobby_list_withImage[$i][0][$index]."'>".$selected_hobby_list_withImage[$i][0][$index]."</a>";
                echo "</td>";
                echo "</tr>";
                //as image is added, so it become true
                $image_added = true;
                //as the first link is added, so it become false
                $first_add_link = false;
                }
            //if it is not the first time to add link
            else if($first_add_link == false)
                {
                //create a new row
                echo "<tr>";
                echo "<td>";
                echo "<br><br><br>";
                //then we insert text of FoodStyle and text link
                echo "<a href ='".$selected_hobby_list_withImage[$i][0][$index]."'>".$selected_hobby_list_withImage[$i][0][$index]."</a>";
                echo "</td>";
                echo "</tr>";
                }
        }
        echo"</table>";
    }
}
?>
<html>
    <body style='background-color:#FFFEE9;'>
    <div id = "div1">
    <?php 
    //run the function if the file being run 
    display_hobby($selected_hobby_list_withImage, $random_hobby_link_list); ?>
    </div><br> 
    <center><input type = "button" value= "Back To Menu" onclick="history.back()"></center>
    </body>
</html>