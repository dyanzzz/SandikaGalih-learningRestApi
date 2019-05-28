<?php
  require 'vendor/autoload.php';
  use GuzzleHttp\Client;

  $client = new Client();

  $response = $client->request('GET', 'http://www.omdbapi.com', [
    'query'=>[
      'apikey'=>'79cf0495',
      's'=>'transformers'
    ]
  ]);

  $result = json_decode($response->getBody()->getContents(), true);
  //var_dump($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie</title>
  </head>
  <body>

    <?php foreach ($result['Search'] as $movie) {?>

      <ul>
        <li>Title : <?= $movie['Title'];?></li>
        <li>Year : <?= $movie['Year'];?></li>
        <li>
          <img src="<?= $movie['Poster'];?>" alt="80">
        </li>
      </ul>
    <?php
    }
    ?>
  </body>
</html>
