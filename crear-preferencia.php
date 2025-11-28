<?php
require __DIR__ . '/vendor/autoload.php';

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;

// Token de acceso TEST MÉXICO
MercadoPagoConfig::setAccessToken("TEST-5149210181455188-112802-9f214c39595c650c893d47853683bc0b-1649698816");

try {
  $client = new PreferenceClient();
  $desc = $_POST['descripcion'];
  $prec = (float) $_POST['precio'];
  $preference = $client->create([
    "items" => [
      [
        "title" => $desc,
        "quantity" => 1,
        "unit_price" => $prec,
        "currency_id" => "MXN"
      ]
    ],
    "back_urls" => [
      "success" => "http://localhost/success.php",
      "failure" => "http://localhost/failure.php",
      "pending" => "http://localhost/pending.php"
    ]
  ]);


  // Redirige al checkout de MercadoPago
  header("Location: " . $preference->init_point);
  exit;
} catch (MPApiException $e) {
  echo "<pre>";
  print_r($e->getApiResponse());
  echo "</pre>";
}
