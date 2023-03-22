<!--
    Author: LU ZHI JIAN BC000987
    Program description: this program is to store the subject data and based on the selected options to create a array for displaying purpose.
-->
<?php
//web link for hobbies, each subject have 9 link
//0
$subject_raw_list = array(
$Marketing="https://www.hubspot.com/marketing https://moz.com/ https://www.marketingprofs.com/ https://www.adweek.com/ https://contentmarketinginstitute.com/ https://www.socialmediaexaminer.com/ https://www.ama.org/ https://hootsuite.com/ https://neilpatel.com/ https://www.campaignmonitor.com/resources/",
$Accounting="https://www.accountingtools.com/ https://www.accountingcoach.com/ https://www.thebalancesmb.com/accounting-4161431 https://www.investopedia.com/terms/a/accounting.asp https://www.accountingweb.com/ https://www.accountingtoday.com/ https://www.journalofaccountancy.com/ https://www.cpajournal.com/ https://www.accountingprincipals.com/ https://www.aicpa.org/content/aicpa.html ",
$Economics="https://www.economist.com/ https://www.investopedia.com/economics/ https://www.worldbank.org/ https://www.imf.org/ https://www.federalreserve.gov/ https://www.nber.org/ https://www.cfr.org/topic/economics https://www.epi.org/ https://www.stlouisfed.org/ https://www.brookings.edu/topic/economics/",
$Mathematics="https://www.khanacademy.org/math https://www.mathway.com/ https://mathworld.wolfram.com/ https://brilliant.org/ https://www.math.com/ https://www.desmos.com/ https://www.mathplanet.com/ https://www.mathsisfun.com/ https://www.coolmath.com/ https://www.nctm.org/",
$History="https://www.history.com/ https://americanhistory.si.edu/ https://www.bbc.co.uk/history https://www.historynet.com/ https://www.worldhistory.org/ https://www.nationalww2museum.org/ https://www.gilderlehrman.org/ http://www.historyplace.com/ https://www.nytimes.com/section/history https://www.historyextra.com/",
$Art="https://www.artsy.net/ https://www.metmuseum.org/ https://artsandculture.google.com/ https://www.moma.org/ https://www.nga.gov/ https://www.tate.org.uk/ https://americanart.si.edu/ https://www.guggenheim.org/ https://www.artic.edu/ https://www.louvre.fr/en/homepage",
$Psychology="https://www.apa.org/ https://www.psychologytoday.com/ https://www.verywellmind.com/ https://www.nimh.nih.gov/ https://www.bps.org.uk/ https://www.psychologytools.com/ https://positivepsychology.com/ https://www.psychologicalscience.org/ https://www.psycom.net/ https://www.mind.org.uk/",
$Science="https://www.sciencedaily.com/ https://www.nationalgeographic.com/science/ https://www.livescience.com/ https://www.smithsonianmag.com/science-nature/ https://www.scientificamerican.com/ https://www.nasa.gov/ https://www.nature.com/ https://www.sciencenews.org/ https://www.popsci.com/ https://www.discovermagazine.com/",
$Music="https://www.spotify.com/ https://www.apple.com/apple-music/ https://www.pandora.com/ https://www.billboard.com/ https://www.allmusic.com/ https://pitchfork.com/ https://www.rollingstone.com/ https://www.npr.org/music https://www.bbc.co.uk/music https://www.musicradar.com/");
$subject_link_list = array();//define a array to store array of link.

//define a array to store the path of Picture.
$subject_image_list = array("subject_image/marketing.png","subject_image/accounting.png","subject_image/economics.png","subject_image/mathematics.jpeg","subject_image/history.png","subject_image/art.jpeg","subject_image/psychology.jpeg","subject_image/science.jpeg","subject_image/music.jpeg");

$subject_list_withImage = array();//define a array to store array of array of link and path of Picture.

//a label to show what type of link it is and will be add into $subject_list_withImage
$subject_name_list = array("Marketing","Accounting","Economics","Mathematics","History","Art","Psychology","Science","Music");

//based on the selected option(input data), store list of index of selected subject
$selected_subject_index = array();

//get the selected subject from the cookie
$cookie_subject_data = $_COOKIE['subject'];
//convert cookie data into a list
$cookie_subject_data_list = explode(",", $cookie_subject_data);

//base on cookie data list, create list of index of selected subject
foreach($cookie_subject_data_list as $data){
    switch($data)
    {
        case "Marketing":
        array_push($selected_subject_index, 0);break;

        case "Accounting":
        array_push($selected_subject_index, 1);break;

        case "Economics":
        array_push($selected_subject_index, 2);break;

        case "Mathematics":
        array_push($selected_subject_index, 3);break;

        case "History":
        array_push($selected_subject_index, 4);break;

        case "Art":
        array_push($selected_subject_index, 5);break;

        case "Psychology":
        array_push($selected_subject_index, 6);break;

        case "Science":
        array_push($selected_subject_index, 7);break;

        case "Music":
        array_push($selected_subject_index, 8);break;   
    }   
}

//define a array to store the selected subject and the items is based on input data
$selected_subject_list_withImage = array();

//convert the raw data(a string have many link) into array based on " ".
foreach($subject_raw_list as $links_string)
{
    //store the result in a array
    array_push($subject_link_list ,explode(" ", $links_string));
}

//put link list, path of related Picture and related label into a array and push that array in an another array, so there is a 3 dimensional array
for ($x = 0; $x < count($subject_link_list); $x++)
{                               //inside $subject_link_list, each item is a array
    array_push($subject_list_withImage, array($subject_link_list[$x], $subject_image_list[$x],$subject_name_list[$x]));
}

//based on selected options(input data), choose the related array to create a new array. So I can have a array only store the link related to selected options
foreach($selected_subject_index as $selected_index)
{
    array_push($selected_subject_list_withImage, $subject_list_withImage[$selected_index]);
}

?>