<?php

include_once('cockpit/bootstrap.php');

$app = new Lime\App();

$app->bind("/", function() use($app) {

    $posts = collection('video')->find(["public"=>true])->sort(["created"=>-1])->toArray();
    return $app->render('views/index.php', ['posts' => $posts]);
});


$app->bind("/episode/:id", function ($params) use($app) {

    $post = collection('video')->findOne(['name_url'=>$params["id"]]);
    $episodes = collection('video')->find(["public"=>true])->toArray();
    return $app->render('views/episode.php', ['post' => $post, 'episodes' => $episodes]);
});

$app->run();
