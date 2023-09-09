<?php
if ((strpos($message, "/code") === 0)||(strpos($message, "!code") === 0)||(strpos($message, ".code") === 0))
{
  if($role != "OWNER")
  {
    sendMessage($chatId,"You are Not ADMIN ! ",$messageId);
  } 
  else
  {
$i = substr($message,6);
if($i == ' ' || $i == '') {
   $i = '1';
}
else
{
  $i = clean($message);
}
  
$credt = array();
while($i > 0)    
{
  $rnds = random_strings(4).'-'.random_strings(4).'-'.random_strings(4).'-'.random_strings(4);
$credt[] = "$rnds";
  $i = $i - 1;
}
sendChatAction($chatId,"type");
$sss = reply_to($chatId,urlencode(
  "
⌬ 𝗚𝗘𝗡𝗘𝗥𝗔𝗧𝗘𝗗 𝗖𝗥𝗘𝗗𝗜𝗧𝗦

GENERATING CODES.....

𝗕𝗢𝗧 𝗕𝗬 - $bowner 
  "),$messageId);
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
foreach ($credt as $codes)
  {
    $cdbln = substr($message, 8);
    if(empty($cdbln))
    {
      $cdbln = "100";
    }
    $credtf = fopen('func/codes.txt','a');
    fwrite($credtf,$codes." ".$cdbln."\n");
    $codes = "<code>$codes</code>";
    $codess = "$codess\n$codes";
     edit_Message($chatId,urlencode("
⌬ 𝗚𝗘𝗡𝗘𝗥𝗔𝗧𝗘𝗗 𝗖𝗥𝗘𝗗𝗜𝗧𝗦

$codess

𝗕𝗢𝗧 𝗕𝗬 - $bowner

"),$message_id_1);
  }
   
  }
}

?>