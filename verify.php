<?php
$access_token = 'GmrXlItq1vUkpCpqWQQL3PCTwsM8J2Jj9HE2SiVzsbIZS/vGjMX/OfsaZSNHe0435/8fVlKFcijutSSd0LJmUokkheuxzmIn3k/Sc36kgMsUoelIjVHO13WzQtX+GNFN8Yu7l9JVGiIjfXI2xWjRDAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
