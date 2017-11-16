<?php
$ran = array_rand($episodes, 6);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title><?php echo $post['name']; ?></title>
</head>
<body>
<div class="container">
    <a href="/">
        <div class="header"></div>
    </a>
    <div class="content d-flex flex-column flex-wrap align-items-center">
        <h1><?php echo $post['name']; ?></h1>
        <div class="iframe">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N22VEYJfkxY" allowfullscreen></iframe>
                <?php
                echo "<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/".$post['url']."\" allowfullscreen></iframe>";
                ?>
            </div>
        </div>
        <div class="share">
            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,telegram"></div>
        </div>
        <p class="title"><?php echo $post['title']; ?></p>
    </div>
    <div class="slider">
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[0]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[0]]['url']."/0.jpg\"></a></div>" ?>
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[1]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[1]]['url']."/0.jpg\"></a></div>" ?>
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[2]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[2]]['url']."/0.jpg\"></a></div>" ?>
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[3]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[3]]['url']."/0.jpg\"></a></div>" ?>
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[4]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[4]]['url']."/0.jpg\"></a></div>" ?>
        <?php echo "<div><a href=\"/episode/".$episodes[$ran[5]]['name_url']."\"><img src=\"http://img.youtube.com/vi/".$episodes[$ran[5]]['url']."/0.jpg\"></a></div>" ?>
    </div>
    <div class="footer">made in ololo trololo</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
<script type="text/javascript" src="../slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
</html>