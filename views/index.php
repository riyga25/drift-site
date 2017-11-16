<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
                    echo "<a href=\" /episode/".$post[name_url]." \">";
                    echo "<img src=\"http://img.youtube.com/vi/".$post[url]."/hqdefault.jpg\"> ";
                    echo "</a>";
                    echo "<p class=\"videoName\">".$post[name]."</p>";
                    echo "</div>";
                }
            ?>
        </div>
    <div class="footer">made in ololo trololo</div>
    </div>
    </body>
    </html>
