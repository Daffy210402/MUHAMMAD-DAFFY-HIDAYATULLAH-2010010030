<?php

$data = [
  'api_key' => '53bdNzTETWMjFpFm0d3RVEcs5C8Xxx',
  'sender' => '6281953991874',
  'number' => $kontak,
  'message' => '
Yth, Bpk/Ibu '.$nama.'.

Anda telah dimasukkan admin kedalam daftar calon pegawai naik pangkat. 
Dengan alasan :

"'.$alasan.'"

Silahkan lengkapi berkas anda, dan serahkan berkas tersebut secara offline kepada admin.
Atas Perhatiannya kami ucapkan terimakasih.

TTD 
Admin '.$apk.'.
  '
];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://wa.buat.pw/send-message',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>