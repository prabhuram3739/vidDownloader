<?php
require_once "common.php";
/* Other Videos */
if (isset($_POST['video_link'])) {
    $url=$_POST['video_link'];
    $url=trim($url);

    if (strstr($_POST['video_link'], "youtube.com")) {
        //$youtubeVideo = getElementByIDAsString("https://loader.to/?link=".$url."&f=9&s=1&e=1&r=ddownr", "ds");
        $youtubeVideoWebsiteURL = "https://loader.to/?link=".$url."&f=9&s=1&e=1&r=ddownr";
    }
}
?>