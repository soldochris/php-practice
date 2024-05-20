<?php

//Defining API_URL as a constant
const API_URL = "https://whenisthenextmcufilm.com/api";

//Initialize a new CURL session (ch = Curl Handle)
$ch = curl_init(API_URL);

//Get the result and don't print it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


//There is an easiest alternative just to get info from an API
// $result = file_get_contents(API_URL);

//execute the petition and save the result
$result = curl_exec($ch);

//decode the json and convert it into an associative array
$data = json_decode($result, true);

//close the operation
curl_close($ch);

?>

<head>
  <title>Next coming Marvel's Movie</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  />
</head>
<main>
  <h2> Next Marvel's Movie</h2>
  <section>
    <img 
      src="<?= $data["poster_url"]; ?>" 
      alt="poster de <?= $data["title"]?>"
      width="300"
      style="border-radius: 16px"
    />
  </section>
  <hgroup>
    <h2><?= $data["title"];?> available in <?= $data["days_until"]?> days</h2>
    <p>Release date: <?= $data["release_date"]?></p>
    <p>Following production: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>

</main>


<style>
  *:root{
    color-scheme: light dark;
  }

  body{
    display: grid;
    place-content: center;
  }
  
  main{
    text-align: center;
  }

  img{
    margin: 0 auto;
  }

</style>