<?php
$api_key   = '94769f1bda440b623aa691f4260d8afa9b6a8221'; // API KEY Anda
$id_device = '6358'; // ID DEVICE yang di SCAN (Sebagai pengirim)
$url   = 'https://api.watsap.id/send-message'; // URL API
$no_hp = $kontak; // No.HP yang dikirim (No.HP Penerima)
$pesan = '
Yth, Bpk/Ibu '.$nama.'.

Status kenaikan gaji anda dikembalikan ke pending. 

Silahkan lengkapi berkas anda, dan serahkan berkas tersebut secara offline kepada admin.
Atas Perhatiannya kami ucapkan terimakasih.

TTD 
Admin '.$apk.'.
'; // Pesan yang dikirim

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
curl_setopt($curl, CURLOPT_TIMEOUT, 0); // batas waktu response
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_POST, 1);

$data_post = [
   'id_device' => $id_device,
   'api-key' => $api_key,
   'no_hp'   => $no_hp,
   'pesan'   => $pesan
];
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_post));
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($curl);
curl_close($curl);

?>