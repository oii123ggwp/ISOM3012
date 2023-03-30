<!--
    Author: FONG IEK KIN BC000076
    Modified by: LEI KA LENG BC000987
    Interface design: BC000314, CHAN CHENG LAM, BC005351, ZHENG BOWEN
    Program description: Display the link and Picture related to selected options in a table. Each time we will display 4 links in the table.
-->
<?php
require ("FoodStyle_data.php");// the link data
require ("randomly_selected_index.php");//function related to randomly select index with no same index

$random_FoodStyle_link_list = randomly_selected_item_index_noSame(4, 10);//get array contain random number which index of $selected_FoodStyle_list_withImage[any num][any num][number use here]
                                                                        //AND there is no same number in this array
                                                                        //we want to show 4 link, and each FoodStyle type have 10 link

function display_FoodStyle($selected_FoodStyle_list_withImage, $random_FoodStyle_link_list)//This function is used to display link and the related image and related FoodStyle type name
{
    //create a table to show the content
    echo"<table style='border: 5px#A79C8D dashed;' cellpadding='10' border='1' width = '50%' align = 'center'>";
    echo"<div style='text-align:center; color:#43379F; font-size:20px;' >Food Style</div>";
    echo"</br>";
    //use for loop to insert row and row data
    for($i = 0; $i < count($random_FoodStyle_link_list); $i++)
    {
        $random_num = rand(0, count($selected_FoodStyle_list_withImage) - 1);//use this to genenate a random first index for $selected_FoodStyle_list_withImage array, so I can randomly select it
                                                                 //the reason I use this instead of $i is that size of $selected_FoodStyle_list_withImage(first index) may small than size of $random_FoodStyle_link_list
                                                                 //If I use $i, the tail part of the array won't be use 
        echo "<tr>";
        //first we insert a image link
        echo "<td width = '15%'><a href ='".$selected_FoodStyle_list_withImage[$random_num][0][$random_FoodStyle_link_list[$i]]."'><img src ='".$selected_FoodStyle_list_withImage[$random_num][1]."'width='160' height='120'></a></td>";
        echo "<td>";
        //then we insert text of FoodStyle and text link
        echo "".$selected_FoodStyle_list_withImage[$random_num][2]."<br><br><br>";
        echo "<a href ='".$selected_FoodStyle_list_withImage[$random_num][0][$random_FoodStyle_link_list[$i]]."'>".$selected_FoodStyle_list_withImage[$random_num][0][$random_FoodStyle_link_list[$i]]."</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo"</table>";
}
?>
<html>
    <body style='background-color:#FFF9F2;'>
    <div id = "div1">
    <?php
    //run the function if the file being run 
    display_FoodStyle($selected_FoodStyle_list_withImage, $random_FoodStyle_link_list); ?>
    </div><br> 
    <center><input type = "button" value= "Back To Menu" onclick="history.back()"></center>
    </body>
</html>