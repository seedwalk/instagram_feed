<?php

$hashtag = "cool";
$client_id = "e7eafe25fc954b77aaf196f3ea5d789c";
$url = "https://api.instagram.com/v1/tags/".$hashtag."/media/recent?client_id=".$client_id;
$instagramData = file_get_contents($url);
$parsedInsta = json_decode($instagramData);
$instaFotos = $parsedInsta->data;



  for ($i=0; $i < count($instaFotos); $i++) {

    echo '<div class= "instafoto" style="background: url('.$instaFotos[$i]->images->standard_resolution->url.')"></div>';

  }

  ?>