<?php require_once "youtubeVideo.php"; ?>
<?php require_once realpath("vendor/autoload.php"); ?>
<?php if (!empty($_GET['video_link'])) {
    $video_link = $_GET['video_link'];
}
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Download Video</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/video.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="" class="formSmall" name="form">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="headingAlign"> Download Video</h1>
                </div>
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="video_link" name="video_link"
                            placeholder="Paste link.." value="<?php echo $video_link; ?>">
                        <span class="input-group-btn">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Go!</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div><!-- .row -->
            <select name="site" onChange="showurl(document.form.site.selectedIndex);">
                <option value="youtube">YouTube</option>
                <option value="dailymotion">DailyMotion</option>
                <!--<option value="vimeo">Vimeo</option>-->
            </select>

            <div id="exampleLinks">
                <p>

                    <font id="example_1" class="chooser_info"
                        onClick="document.form.url.value='http://www.youtube.com/watch?v=b0l4QAkzkl4'">example link:
                        <u>http://www.youtube.com/watch?v=b0l4QAkzkl4</u></font>
                    <font id="example_2" class="chooser_info_hide"
                        onClick="document.form.url.value='http://www.dailymotion.com/video/xqq55_4-joels'">example link:
                        <u>http://www.dailymotion.com/video/xqq55_4-joels</u></font>
                        <!--<font id="example_3" class="chooser_info_hide"
                        onClick="document.form.url.value='https://vimeo.com/9011932'">example link:
                        <u>https://vimeo.com/9011932</u></font>-->

            </div>

            <?php if($error) :?>
            <div style="color:red;font-weight: bold;text-align: center"><?php print $error?></div>
            <?php endif;?>

            <?php if($result):?>
            <div class="row formSmall noPadding">
                <div class="col-lg-6 videoThumbnail">
                    <img class="thumbnail" src="<?php print $thumbnail?>">
                </div>
                <div class="col-lg-6 videoTitle">
                    <?php print $title?>
                </div>
            </div>

            <table class="table table-striped formSmall">
                <tr class="tableHeading">
                    <td>Type</td>
                    <td>Quality</td>
                    <td>Download</td>
                </tr>
                <?php foreach ($downloadLinks as $video) :?>
                <tr>
                    <td><?php print $video['type']?></td>
                    <td><?php print $video['quality']?></td>
                    <td><a
                            href="downloader.php?link=<?php print urlencode($video['link'])?>&title=<?php print urlencode($title)?>&type=<?php print urlencode($video['type'])?>">Download</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
            <?php if(empty($result) && !empty($_POST['video_link'])): ?>
            <?php require_once "noLicenseYoutubeVideo.php"; ?>
            Non-licensed Youtube URL: <a href="<?php echo $youtubeVideoWebsiteURL; ?>" target="_blank">Click Here</a>
            <?php endif; ?>
            <div class="row formSmall">
                <?php require_once 'dailyMotionVideo.php'; ?>
            </div>
            <!--<div class="row formSmall">
                <?php //require_once "vimeoVideo.php"; ?>
            </div>-->
        </form>
    </div>
</body>

</html>