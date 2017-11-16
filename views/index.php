<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <meta name="description"            content="«Evil Empire» (в переводе на русский – «Империя Зла») обозначает могущественное государство, чья политическая природа считается априори злой."/>
    <meta name="keywords"               content="drift, russia, belarus, car, evel empire, дрифт, Россия, Беларусь" />

    <meta property="og:type"            content="website" />
    <meta property="og:title"           content="Evil Empire" />
    <meta property="og:url"             content="http://riyga251.had.su/" />
    <meta property="og:image"           content="https://pp.userapi.com/c824501/v824501629/27203/SBwSi-WEQkE.jpg" />
    <meta property="og:description"     content="«Evil Empire» (в переводе на русский – «Империя Зла») обозначает могущественное государство, чья политическая природа считается априори злой." />

    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.eedrift.com/wp-content/themes/evilempire/favicon/favicon-96x96.png">

    <title>Evel Empire</title>
</head>
<body>
<div class="container">
    <a href="/">
        <div class="header"></div>
    </a>
    <div class="allContent d-flex flex-wrap">
            <?php
                foreach ($posts as $post) {
                    echo "<div class=\"video\">";
                    echo "<a href=\" /episode/".$post['name_url']." \">";
                    echo "<img src=\"http://img.youtube.com/vi/".$post['url']."/hqdefault.jpg\"> ";
                    echo "</a>";
                    echo "<p class=\"videoName\">".$post['name']."</p>";
                    echo "</div>";
                }
            ?>
        </div>
    <div class="footer">made in ololo trololo</div>
    </div>
    </body>
    </html>
