<?php
use Twilio\Rest\Client;

$AccountSid = ACa3c141e74940f6cbcb11168483ca430c;
$AuthToken = "cee1286b3f15a3ab33e4147c9d506628";

$client = new Client($AccountSid, $AuthToken);

$people = array("+447871778000")

foreach ($people as $number) {
  $sms = $client->account->messages->create(
    $number,

    array(
      'from' => "+441274271560",

      'body' => "Default string"
    )
  );
}
 ?>
