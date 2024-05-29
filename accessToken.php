<?php
$consumerKey = "TJscFGiYjsh07tMVhCKb2AgGUNBDb6htz8uqeyFR6n5sB1CA";
$consumerSecret ="goSfZx6gL0XIxnHHQwUs0qJLtpA4KI2xDSlAfbcWlURKIuvQUXlQUPxIwQ29hZrF";
$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$header = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_USERPWD,$consumerKey.":".$consumerSecret);
$result = curl_exec($curl);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);