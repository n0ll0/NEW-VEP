<?php 
use Dotenv\Dotenv;
require __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$client = new MongoDB\Client($_ENV['MONGODB']);
$collection = $client->test->support;

$collection->insertOne([
  "name"=> $name, 
  "email"=> $email,
  "message"=> $message
]);
var_dump($_ENV, $_POST);
header('location: http://'.$_SERVER['HTTP_HOST'] .'/index.php');