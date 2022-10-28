<?php 

// header("location: index.php");


use Dotenv\Dotenv;
require_once __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$client = new MongoDB\Client($_ENV['MONGODB']);
$collection = $client->test->support;

$cursor = $collection->find();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEB dev</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <a href="index.php">Back</a>
  <?php foreach ($cursor as $document) { ?>
    
    <h3><?= $document["name"] ; ?></h3>
    <h4><?= $document["email"] ; ?></h4>
    <p><?= $document["message"] ; ?></p>


  <?php } ?>

</body>
</html>