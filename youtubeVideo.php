<?php
require_once "class.youtube.php";
$yt  = new YouTubeDownloader();
$downloadLinks ='';
$error='';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $videoLink = $_POST['video_link'];
    $vid = $yt->getYouTubeCode($videoLink);

    if($vid) {
        $result = $yt->processVideo($vid);

        if($result) {
            //print_r($result);
            $info = $result['info'];
            $downloadLinks = $result['videos'];
            $videoInfo = json_decode($info['player_response']);

            $title = $videoInfo->videoDetails->title;
            $thumbnail = $videoInfo->videoDetails->thumbnail->thumbnails{0}->url;
        }
    }
}
?>