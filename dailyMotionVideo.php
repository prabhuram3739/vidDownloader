<?php
require_once "common.php";
/* Other Videos */
if (isset($_POST['video_link'])) {
    $url=$_POST['video_link'];
    $url=trim($url);
    if (strstr($_POST['video_link'], "dailymotion.com")) {
        $html = getElementByIdAsString("https://dmvideo.download/?url=".$_POST['video_link'], "results");
        echo $html;
    }
}
?>