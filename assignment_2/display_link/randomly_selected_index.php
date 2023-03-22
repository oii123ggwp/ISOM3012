<!--
    Author: FONG IEK KIN
    Program description: there are two function in the program. One can randomly selected mutile item but no repetition, another one have repetition
-->
<?php
function randomly_selected_item_index_noSame($how_many_diplay, $how_many_link)//This function is used to randomly select link in each item type
                                                                               //First varible is to set how many random number create
                                                                               //Second varible is to tell the function how link in each item type, however each hobyy type should have same amount of link
                                                                               //In the result, every random number is not same
{
    $random_number_list = array();//a array to store random number
    $count = 0;//count how many times the while loop run that add the number into the array
    
    while($count < $how_many_diplay)//a loop for adding random number into random number array
    {
        $sameNumber = false;//to store the condition of random number, false mean have same number in the pervious result, true mean is not.
        $random_number = rand(0,$how_many_link-1);//each item have 10 link, get the random index so we randomly get link from the array in another php file

        for($j = 0; $j < count($random_number_list);$j++)//this for loop is design to compare the number in the random number array and new random number
                                                         //So we can have a random number array which does not contain same number
        {
            if($random_number == $random_number_list[$j])//if the number in the random number array and new random number is the same
            {
                $sameNumber = true;//set the condition to true
                break;//break the loop
            }
        }
        if($sameNumber == false)//if the number is not the same, it add into the array
        {
            array_push($random_number_list,$random_number);//add to array
            $count++;//count how many time manage to add number into array
        }
    }
    return $random_number_list;//return the array contain random number which mean the index of array
}



?>