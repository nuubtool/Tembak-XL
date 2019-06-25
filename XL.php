<?php
$ch = curl_init();
$imei = "";
$msisdn = "";//no telp
$sessionid = ""; //session id
$serviceid = ""; //service id
$bod = array(
  "Header"=>null,
  "Body"=>[
   "HeaderRequest"=>[
     "applicationID"=>"3",
     "applicationSubID"=>"1",
     "touchpoint"=>"MYXL",
     "requestID"=>"20190624132245",
     "msisdn"=>"$msisdn",
     "serviceID"=>"$serviceid"],
    "opPurchase"=>[
     "msisdn"=>"$msisdn",
     "serviceid"=>"$serviceid"],
    "XBOXRequest"=>[
     "requestName"=>"GetSubscriberMenuId",
     "Subscriber_Number"=>"1301235663",
     "Source"=>"mapps",
     "Trans_ID"=>"119520832111",
     "Home_POC"=>"BJ0",
     "PRICE_PLAN"=>"513738114",
     "PayCat"=>"PRE-PAID",
     "Active_End"=>"20190615",
     "Grace_End"=>"20190715",
     "Rembal"=>"0",
     "IMSI"=>"510110032177230",
     "IMEI"=>"$imei",
     "Shortcode"=>"mapps"],
    "Header"=>[
     "IMEI"=>1588165533,
     "ReqID"=>"20190624132245"]],
   "sessionId"=>"$sessionid",
   "serviceId"=>"$serviceid",
   "packageRegUnreg"=>"Reg",
   "reloadType"=>"",
   "reloadAmt"=>"",
   "packageAmt"=>"99.000",
   "platform"=>"02",
   "appVersion"=>"3.8.2",
   "sourceName"=>"Others",
   "sourceVersion"=>"",
   "msisdn_Type"=>"P",
     "screenName"=>"home.storeFrontReviewConfirm",
   "mbb_category"=>"");

$body = json_encode($bod);
$header = array('Content-Type: application/json', 'Referer: https://my.xl.co.id/pre/index1.html', 'Accept-Encoding: gzip, deflate, br', 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7');
curl_setopt($ch, CURLOPT_URL, 'https://my.xl.co.id/pre/opPurchase');
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$hasil = curl_exec($ch);
echo $hasil;
