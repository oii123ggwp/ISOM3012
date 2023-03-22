<!--
    Author: FONG IEK KIN
    Program description: Display the link and Picture related to selected options in a table. Each time we will display 4 links in the table.
-->
<?php
require ("hobby_data.php");// the link data
require ("randomly_selected_index.php");//function related to randomly select index with no same index

$random_hobby_link_list = randomly_selected_item_index_noSame(4, 10);//get array contain random number which index of $selected_hobby_list_withImage[any num][any num][number use here]
                                                                          //AND there is no same number in this array
                                                                          //we want to show 4 link, and each hobby type have 10 link

function display_hobby($selected_hobby_list_withImage, $random_hobby_link_list)//This function is used to display link and the related image and related hobby type name
{
    //create a table to show the content
    echo"<table border = 1 width = '75%' align = 'center'>";
    echo"<caption>Hobby</caption";
    for($i = 0; $i < count($random_hobby_link_list); $i++)
    {
        $random_num = rand(0, count($selected_hobby_list_withImage) - 1);//use this to genenate a random first index for $selected_hobby_list_withImage array, so I can randomly select it
                                                                 //the reason I use this instead of $i is that size of $selected_hobby_list_withImage(first index) may small than size of $random_hobby_link_list
                                                                 //If I use $i, the tail part of the array won't be use 
        echo "<tr>";
        //first we insert a image link
        echo "<td width = '10%'><a href ='".$selected_hobby_list_withImage[$random_num][0][$random_hobby_link_list[$i]]."'><img src ='".$selected_hobby_list_withImage[$random_num][1]."'width='120' height='120'></a></td>";
        echo "<td>";
        //then we insert text of hobby and text link
        echo "".$selected_hobby_list_withImage[$random_num][2]."<br><br><br>";
        echo "<a href ='".$selected_hobby_list_withImage[$random_num][0][$random_hobby_link_list[$i]]."'>".$selected_hobby_list_withImage[$random_num][0][$random_hobby_link_list[$i]]."</a>";
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
    display_hobby($selected_hobby_list_withImage, $random_hobby_link_list); ?>
    </div>
    </body>
</html>