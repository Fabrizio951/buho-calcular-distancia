<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://qr.chat.buho.la/api/create-message',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
  'appkey' => 'fc4d52cf-2c33-4787-95f1-1b8a89d580e0',
  'authkey' => 'Y3vda2G1uoBW9sB8S4rl89Rc2u5F3xfDbYHaCFHgPqDg0H3sc3',
  'to' => '51997630555',
  'message' => 'Holaaaaaaaaa',
  'sandbox' => 'false'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>