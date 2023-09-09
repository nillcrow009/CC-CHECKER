<?php 
if ((strpos($message, "/charge") === 0)||(strpos($message, "!charge") === 0)||(strpos($message, ".charge") === 0)){
  if ($role == "OWNER")
  {
$clenmsg = substr($message,7);
$msg = explode(".", $clenmsg);    
$j = trim($msg[1]);
$sk = trim($msg[2]);
$msgsnd = reply_to($chatId,urlencode("
➜ 𝗖𝗛𝗘𝗖𝗞𝗘𝗥𝗦 𝗨𝗦𝗘𝗗 𝗜𝗡 𝗦𝗞: 

➜ 𝗦𝗞 : $sk

"),$messageId);
   $respon = json_decode($msgsnd, TRUE);
$message_id_1 = $respon['result']['message_id'];

while($j>0)
{
 // $i =0;
for($i=0;$i<9;$i++)
{
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
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
$des = trim(strip_tags(getStr($stripe,'"description": "','"')));
$descr = trim("$descr\n$des");
  }
edit_message($chatId,urlencode("
➜ 𝗖𝗛𝗘𝗖𝗞𝗘𝗥𝗦 𝗨𝗦𝗘𝗗 𝗜𝗡 𝗦𝗞:
➜ 𝗦𝗞: $sk

$descr

"),$message_id_1);
  $descr = "";
  $j--;
}
    
}
}
?>
