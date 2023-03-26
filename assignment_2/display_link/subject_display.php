<!--
    Author: FONG IEK KIN BC000076
    Modified by : LU ZHI JIAN BC000987
    Program description: Display the link and Picture related to selected options in a table. Each time we will display 4 links in the table.
-->
<?php
require ("subject_data.php");// the link data
require ("randomly_selected_index.php");//function related to randomly select index with no same index

$random_subject_link_list = randomly_selected_item_index_noSame(4, 10);//get array contain random number which index of $selected_subject_list_withImage[any num][any num][number use here]
                                                                        //AND there is no same number in this array
                                                                        //we want to show 4 link, and each subject type have 10 link

function display_subject($selected_subject_list_withImage, $random_subject_link_list)//This function is used to display link and the related image and related subject type name
{

    //create a table to show the content
    echo"<body style='background-color:#F3F1FF;'>";
    echo"<table style='border: 5px#92A4D4 dashed;' cellpadding='10' border='1' width = '50%' align = 'center'>";
    echo"<div style='text-align:center; color:#6D645A; font-size:20px;' >Subject</div>";
    echo"</br>";
    //use for loop to insert row and row data
    for($i = 0; $i < count($random_subject_link_list); $i++)
    {
        $random_num = rand(0, count($selected_subject_list_withImage) - 1);//use this to genenate a random first index for $selected_subject_list_withImage array, so I can randomly select it
                                                                 //the reason I use this instead of $i is that size of $selected_subject_list_withImage(first index) may small than size of $random_subject_link_list
                                                                 //If I use $i, the tail part of the array won't be use and it is not random
        echo "<tr>";
        //first we insert a image link
        echo "<td width = '15%'><a href ='".$selected_subject_list_withImage[$random_num][0][$random_subject_link_list[$i]]."'><img src ='".$selected_subject_list_withImage[$random_num][1]."'width='120' height='120'></a></td>";
        echo "<td>";
        //then we insert text of subject and text link
        echo "".$selected_subject_list_withImage[$random_num][2]."<br><br><br>";
        echo "<a href ='".$selected_subject_list_withImage[$random_num][0][$random_subject_link_list[$i]]."'>".$selected_subject_list_withImage[$random_num][0][$random_subject_link_list[$i]]."</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo"</table>";
}
?>
<html>
    <body>
    <div id = "div1">
    <?php 
    //run the function if the file being run 
    display_subject($selected_subject_list_withImage, $random_subject_link_list); ?>
    </div>
    </body>
</html>