<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  if($role != "OWNER")
  {
    sendMessage($chatId,"You are Not ADMIN ! ",$messageId);
  } 
  else
  {
  sendMessage($chatId,urlencode(
    " 
⌬ 𝗔𝗗𝗠𝗜𝗡 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

➥  /add - ADD PREMIUM USER
➥  /acht - ADD PREMIUM CHAT 
➥ /code - GENERATE REDEEM CODE 

𝗕𝗢𝗧 𝗕𝗬 - $bowner
    "),$messageId);
  }
}

?>