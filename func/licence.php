<?php
if ((strpos($message, "/prem") === 0)||(strpos($message, "!prem") === 0)||(strpos($message, ".prem") === 0))
{
  if($role == "OWNER")
  {
$clenmsg = substr($message,5);
$time = explode(";", $clenmsg); 
$tgid = $time[0];
   // sendMessage($chatId,$clenmsg,0);
  //  sendMessage($chatId,"$time[1] $time[2] $time[3]",0);
$days = $time[1];
$hour = $time[2];
$min = $time[3];
if($days != "0")
{
    if(empty($days))
    {
      sendMessage($chatId,"NO DAYS FOUND PLEASE PUT 0",0);
    exit();
    }
}
    if(empty($hour))
      $hour="0";
    if(empty($min))
      $min = "0";
//$tgid = substr($clenmsg,0,10);
$rnds = random_strings(4).'-'.random_strings(4).'-'.random_strings(4).'-'.random_strings(4);
    $day = date("Y-m-d H:i:s ");
   //sendMessage($chatId,$min,0);
$exdate = date("Y-m-d H:i:s ", strtotime($day . "+$days days $hour hour $min minute"));
    //sendMessage($chatId,$exdate,0);
//sendChatAction($csendMessage($chatId,$day,0);hatId,"type");
   // $firstname = id($userId);
sendMessage($chatId,urlencode("
• 𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗖𝗛𝗘𝗖𝗞𝗘𝗥 𝗖𝗥𝗘𝗗𝗜𝗧

➜ 𝗨𝗦𝗘𝗥 𝗜𝗗 : <code>$tgid</code>
➜ 𝗘𝗫𝗣𝗜𝗥𝗬 𝗗𝗔𝗧𝗘 : $exdate
➜ 𝗦𝗧𝗔𝗧𝗨𝗦 : 𝗣𝗥𝗘𝗠𝗜𝗨𝗠 ! 

𝗕𝗢𝗧 𝗕𝗬 - $bowner
"
),$messageId);
$tgid = clean($tgid);
$licen = "$tgid|$days| $exdate|";
$lic = fopen('func/ips.txt','a');
    fwrite($lic,$licen."\n");
  } 
else
  {
    sendMessage($chatId,"➜ 𝗢𝗡𝗟𝗬 𝗢𝗪𝗡𝗘𝗥 𝗖𝗢𝗠𝗠𝗔𝗡𝗗 ❌",$messageId);
  }
}

?>