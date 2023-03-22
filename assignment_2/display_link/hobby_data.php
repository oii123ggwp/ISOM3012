<!--
    Author: FONG IEK KIN BC000076
    Program description: this program is to store the hobby data and based on the selected options to create a array for displaying purpose.
-->
<?php
//web link for hobbies, each hobby have 10 link
//0
$hobby_raw_list = array($Animation="https://reelrundown.com/animation/Funny-Anime-Characters https://www.empireonline.com/movies/features/50-greatest-animated-characters-2/ https://www.freepik.com/free-photos-vectors/character-animation https://www.animaker.com/ https://www.renderforest.com/animation-maker https://www.adobe.com/express/create/video/animation https://www.uxpin.com/studio/blog/web-design-trends-analyzed-8-effective-types-of-animation/ https://colorlib.com/wp/animation-websites/ https://www.animaker.com/blog/10-types-of-animations/ https://www.schoolofmotion.com/blog/10-websites-with-great-animation",
//1
$Gaming="https://www.gamespot.com/ https://www.destructoid.com/amp/ https://www.thatvideogameblog.com/ https://www.gamingdebugged.com/ https://www.siliconera.com/ https://techraptor.net/ https://store.steampowered.com/ https://www.giantbomb.com/ https://n4g.com/ https://in.ign.com/",
//2
$Reading="https://www.amazon.com/amazonbookreview https://www.bookbub.com/welcome https://bookmarks.reviews/ https://bookriot.com/ https://www.brainpickings.org/ https://www.bustle.com/books https://electricliterature.com/ https://www.epicreads.com/ https://fivebooks.com/ https://www.goodreads.com/",
//3
$Cooking="https://allrecipes.com/ https://foodnetwork.com/ https://thekitchn.com/ https://food.com/ https://sallysbakingaddiction.com/ https://plated.com/ https://seriouseats.com/ https://epicurious.com/ https://eater.com/ https://myrecipes.com/",
//4
$Dancing="https://www.shobanajeyasingh.co.uk/ https://www.rambert.org.uk/ https://www.jlsdance.com/ https://www.trinitylaban.ac.uk/ https://www.theplace.org.uk/ https://www.pineapple.uk.com/studio https://www.city-academy.com/ https://thedanceclub.com/ https://www.mdp.dance/ https://southernstruttdance.com/",
//5
$Drawing="https://sketch.io/sketchpad/ https://quickdraw.withgoogle.com/ https://en.wikipedia.org/wiki/Drawing https://www.britannica.com/art/drawing-art https://www.autodraw.com/ https://www.youtube.com/watch?v=cVCSzt8RU0g https://www.youtube.com/watch?v=nLA3Ss2CNZA https://artsandculture.google.com/entity/drawing/m02csf https://in.pinterest.com/kauserkh01/drawing/ https://www.intellectbooks.com/drawing-research-theory-practice",
//6
$Drama="https://www.viki.com/genres/drama https://www.iq.com/drama?lang=en_us https://www.viu.com/ott/no-service/ https://wetv.vip/en https://www.ondemandkorea.com/drama https://tvbanywhereplus.com/movies/ https://myotakuworld.com/korean-drama-website/ https://www.chinawhisper.com/top-10-websites-to-watch-chinese-tv-series-online-for-free/ https://jalantikus.com/tips/nonton-drama-korea/ https://myotakuworld.com/korean-drama-website/",
//7
$Karaoke="https://en.wikipedia.org/wiki/Karaoke https://www.youtube.com/channel/UCbqcG1rdt9LMwOJN4PyGTKg https://www.karafun.com/ https://www.karafunbar.com/ https://www.singsingdc.com/ https://www.karaoke-version.com/ https://havefunkaraoke.com/ https://www.thevenuela.com/karaoke/ https://www.stingray.com/products/karaoke https://www.youtube.com/thekaraokechannel",
//8
$Music="https://time.com/5254381/listening-to-music-health-benefits/ https://www.kent-teach.com/Blog/post/2017/06/29/8-benefits-of-listening-to-music.aspx https://soundcloud.com/ https://www.pristineword.com/grammar-listen-to-music/ https://www.psychologytoday.com/us/blog/science-choice/202110/5-reasons-why-we-listen-music https://music.apple.com/cn/browse https://music.douban.com/ https://music.amazon.com/ https://wynk.in/music https://www.jango.com/",
//9
$Sing="https://en.wikipedia.org/wiki/Singing https://www.britannica.com/art/singing https://www.youtube.com/watch?v=tV78Z7PWmHA https://www.youtube.com/watch?v=jog-nfLldRI https://www.youtube.com/watch?v=7cBkkulndz4 https://www.npr.org/2022/05/18/1099744999/how-to-sing https://www.healthline.com/health/benefits-of-singing https://www.operanorth.co.uk/news/10-reasons-singing-is-good-for-you/ https://www.singingflame.com/ https://www.singingrock.com/");

$hobby_link_list = array();//define a array to store array of link.

//define a array to store the path of Picture.
$hobby_image_list = array("hobby_image/animation.jpeg","hobby_image/Gaming.jpeg","hobby_image/Reading.png","hobby_image/Cooking.png","hobby_image/Dancing.png","hobby_image/Drawing.png","hobby_image/Drama.png","hobby_image/Karaoke.png","hobby_image/Music.png","hobby_image/Sing.png");

$hobby_list_withImage = array();//define a array to store array of array of link and path of Picture.

//a label to show what type of link it is and will be add into $hobby_list_withImage
$hobby_name_list = array("Animation","Gaming","Reading","Cooking","Dancing","Drawing","Drama","Karaoke","Music","Sing");

//based on the selected option(input data), store list of index of selected hobby
$selected_hobby_index = array();

//get the selected hobby from the cookie
$cookie_hobby_data = $_COOKIE['hobby'];
//convert cookie data into a list
$cookie_hobby_data_list = explode(",", $cookie_hobby_data);

//base on cookie data list, create list of index of selected hobby
foreach($cookie_hobby_data_list as $data){
    switch($data)
    {
        case "Animation":
        array_push($selected_hobby_index, 0);break;

        case "Gaming":
        array_push($selected_hobby_index, 1);break;

        case "Reading":
        array_push($selected_hobby_index, 2);break;

        case "Cooking":
        array_push($selected_hobby_index, 3);break;

        case "Dancing":
        array_push($selected_hobby_index, 4);break;

        case "Drawing":
        array_push($selected_hobby_index, 5);break;

        case "Drama":
        array_push($selected_hobby_index, 6);break;

        case "Karaoke":
        array_push($selected_hobby_index, 7);break;

        case "Music":
        array_push($selected_hobby_index, 8);break;

        case "Sing":
        array_push($selected_hobby_index, 9);break;    
    }   
}
//define a array to store the selected hobby and the items is based on input data
$selected_hobby_list_withImage = array();

//convert the raw data(a string have many link) into array based on " ".
foreach($hobby_raw_list as $links_string)
{
    //store the result in a array
    array_push($hobby_link_list ,explode(" ", $links_string));
}

//put link list, path of related Picture and related label into a array and push that array in an another array, so there is a 3 dimensional array
for ($x = 0; $x < count($hobby_link_list); $x++)
{                               //inside $hobby_link_list, each item is a array
    array_push($hobby_list_withImage, array($hobby_link_list[$x], $hobby_image_list[$x],$hobby_name_list[$x]));
}

//based on selected options(input data), choose the related array to create a new array. So I can have a array only store the link related to selected options
foreach($selected_hobby_index as $selected_index)
{
    array_push($selected_hobby_list_withImage, $hobby_list_withImage[$selected_index]);
}

?>