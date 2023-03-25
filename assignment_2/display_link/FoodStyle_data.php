<!--
    Author: LEI KA LENG BC000076
    Program description: this program is to store the FoodStyle data and based on the selected options to create a array for displaying purpose.
-->
<?php
//web link for FoodStyle, each FoodStyle have 10 link
//0
$FoodStyle_raw_list = array($Japanese="https://www.wynnmacau.com/en/restaurants-n-bars/fine-dining/mizumi https://www.hotelisboa.com/dining/new-furusato https://m.facebook.com/hokkaidorestaurantmacao/ https://www.facebook.com/%E8%90%AC%E6%97%A5%E6%9C%AC%E6%96%99%E7%90%86kikkoma-MACAU-109821061777595/ https://www.facebook.com/SUSHIGETSU/ https://www.facebook.com/saigi2018 http://www.sushimitei.com/ https://www.facebook.com/tsutorimacau https://www.facebook.com/%E5%A7%AC%E6%97%A5%E6%9C%AC%E6%96%99%E7%90%86-103096721708162/ https://www.instagram.com/samuraifish2888",
//1
$Korean="https://www.facebook.com/macauarirang/ http://www.instagram.com/hoiwantoi http://www.goobne.co.kr/ https://www.cityofdreamsmacau.com/en/dine/asian/hongjiade-korean-ginseng-chicken-soup https://www.facebook.com/JejuIslandMacau/ https://frommacau.com/haeundae-in-lamau-fai-chi-kei-macau/ https://www.facebook.com/Honsengmo/ https://www.dsedt.gov.mo/lcp/zh_TW/store_detail.jsp?id=520 https://www.nova.mo/page_dining/nm2hkc2-214 https://www.openrice.com/zh/macau/r-%E8%89%BE%E8%96%A9%E5%85%8B%E5%90%90%E5%8F%B8%E5%92%96%E5%95%A1-%E6%96%B0%E9%A6%AC%E8%B7%AF-%E9%9F%93%E5%9C%8B%E8%8F%9C-%E4%B8%89%E6%96%87%E6%B2%BB-r450888",
//2
$Chinese="http://www.yp.mo/wongchikei http://www.starworldmacau.com/en/taste/restaurant#feng-wei-ju https://www.grandlisboahotels.com/en/dining/beixiangguan https://www.grandlisboahotels.com/en/dining/south-kitchen https://www.cityofdreamsmacau.com/sc/dine/chinese/jade-dragon https://www.sandsmacao.com/dining/fine-dining/golden-court.html https://www.fishermanswharf.com.mo/zh-hant/%E5%8B%B5%E7%9A%87%E8%BB%92/ https://m.facebook.com/kapokrestaurant/ https://www.grandlisboahotels.com/en/dining/the-8 https://www.casarealhotel.com.mo/zh-hant/dining/imperial-chinese-restaurant/",
//3
$Portuguese="https://hotelisboa.com/dining/guincho-a-galera/ http://www.galomacau.com/ https://www.hotelroyal.com.mo/dining/fado https://www.facebook.com/Dragon.Portuguese.Cuisine http://www.portoexterior.com/ http://apetisqueira.com/en/home/ http://www.facebook.com/ALBERGUE1601 https://www.facebook.com/Riquex%C3%B3-1587791718006055/ https://www.facebook.com/profile.php?id=100050233856007&mibextid=ZbWKwL https://www.facebook.com/Banza-Portuguese-Restaurant-1599990043553263/",
//4
$Thailand="https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d2457168-Reviews-Saffron-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d2544144-Reviews-NAAM_Thai_Restaurant_Grand_Lapa_Macau-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d7033751-Reviews-Tuk_Tuk_Thai_Restaurant-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d1814974-Reviews-Talay_Thai-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d12692217-Reviews-Lord_Stow_s_Garden_Cafe-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d12230899-Reviews-Papermoon_Thai_Cuisine-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d3774616-Reviews-Modern_Thai-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d7200169-Reviews-Sawasdee_Thai_Grill_Cuisine-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d7139497-Reviews-Thai_Good_Food-Macau.html https://www.tripadvisor.com.hk/Restaurant_Review-g664891-d7688867-Reviews-Yawarat_Thai_Restaurant-Macau.html",
//5
$Vietnam="https://www.facebook.com/photikmacau/ https://www.dsedt.gov.mo/lcp/en_US/store_detail.jsp?id=422 https://www.facebook.com/%E6%B5%B7%E8%B6%8A%E5%B0%8F%E9%A3%9F-457305157771003/ https://www.tripadvisor.com.tw/Restaurant_Review-g664891-d10160858-Reviews-Soo_s_Kitchen-Macau.html https://www.tripadvisor.com.tw/Restaurant_Review-g664891-d11759345-Reviews-Le_Sourire_French_Vietnamese-Macau.html https://www.macaotourism.gov.mo/zh-hant/dining/qtsas-restaurant/900258/ https://www.facebook.com/people/%E6%B5%B7%E8%B6%8A%E5%B0%8F%E9%A3%9F/100030320901900/ https://www.sappan.net/ https://maps.gastronomy.gov.mo/author/memo/memo029/ https://www.ytrip.cc/restaurant/23150-23150",
//6
$Vegetarian="https://www.facebook.com/TingTingCafe/ https://www.facebook.com/thevclubmacau/ https://www.facebook.com/cuppacoffee.macau/ https://www.facebook.com/%E6%96%B0%E7%B2%BE%E9%80%B2%E7%B4%A0%E9%A3%9F-193175414178345/ https://www.facebook.com/healthyf00d/ https://www.facebook.com/ConceptHMacau/ https://www.facebook.com/octaspace1/ https://www.facebook.com/groups/585710431595411/ https://www.facebook.com/Veggie-Castle-%E7%B4%A0%E9%A3%9F%E5%A0%A1-487661004969184/ https://www.facebook.com/VegaVegaMacau/ https://www.facebook.com/Houkouchon/?__tn__=%2Cd%2CP-R&eid=ARAr7ZmavYntE3CgHIVSet0RcCTsoET8ZY1D2Xpst_hLc6RlV5qrA0dpSAZ4yVgEw5aYW8b_2GDTun_0");

//define a array to store array of link.
$FoodStyle_link_list = array();

//define a array to store the path of Picture.
$FoodStyle_image_list = array("FoodStyle_image/Japanese.jpeg","FoodStyle_image/Korean.jpeg","FoodStyle_image/Chinese.jpeg","FoodStyle_image/Portuguese.jpeg","FoodStyle_image/Thailand.jpeg","FoodStyle_image/Vietnam.jpeg","FoodStyle_image/Vegetarian.jpeg");

$FoodStyle_list_withImage = array();//define a array to store array of array of link and path of Picture.

//a label to show what type of link it is and will be add into $FoodStyle_list_withImage
$FoodStyle_name_list = array("Japanese","Korean","Chinese","Portuguese","Thailand","Vietnam","Vegetarian");

//based on the selected option(input data), store list of index of selected FoodStyle
$selected_FoodStyle_index = array();

//get the selected foodstyle from the cookie
$cookie_data = $_COOKIE["foodstyle"];
//convert cookie data into a list
$cookie_data_list = explode("," ,$cookie_data);

//base on cookie data list, create list of index of selected foodstyle
foreach( $cookie_data_list as $foodstyle)
{
    switch ($foodstyle)
    {
        case "Japanese":
            array_push($selected_FoodStyle_index, 0);break;

        case "Korean":
            array_push($selected_FoodStyle_index, 1);break;

        case "Chinese":
            array_push($selected_FoodStyle_index, 2);break;

        case "Portuguese":
            array_push($selected_FoodStyle_index, 3);break;
    
        case "Thailand":
            array_push($selected_FoodStyle_index, 4);break;

        case "Vietnam":
            array_push($selected_FoodStyle_index, 5);break;
        
        case "Vegetarian":
            array_push($selected_FoodStyle_index, 6);break;
    }
}



//define a array to store the selected FoodStyle and the items is based on input data
$selected_FoodStyle_list_withImage = array();

//convert the raw data(a string have many link) into array based on " ".
foreach($FoodStyle_raw_list as $links_string)
{
    //store the result in a array
    array_push($FoodStyle_link_list ,explode(" ", $links_string));
}

//put link list, path of related Picture and related label into a array and push that array in an another array, so there is a 3 dimensional array
for ($x = 0; $x < count($FoodStyle_link_list); $x++)
{                               //inside $FoodStyle_link_list, each item is a array
    array_push($FoodStyle_list_withImage, array($FoodStyle_link_list[$x], $FoodStyle_image_list[$x],$FoodStyle_name_list[$x]));
}

//based on selected options(input data), choose the related array to create a new array. So I can have a array only store the link related to selected options
foreach($selected_FoodStyle_index as $selected_index)
{
    array_push($selected_FoodStyle_list_withImage, $FoodStyle_list_withImage[$selected_index]);
}

?>