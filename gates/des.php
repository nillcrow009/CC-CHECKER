<?php 
if ((strpos($message, "/users") === 0)||(strpos($message, "!users") === 0)||(strpos($message, ".users") === 0)){
  if($role == "OWNER")
  {

$users = count(file('./func/users.txt'));
reply_to($chatId,urlencode(
"
➜ 𝙐𝙎𝙀𝙍𝙎 : $users

𝘽𝙊𝙏 𝘽𝙔 - $bowner
"
),$messageId);
 
  }
  else
  {
   reply_to($chatId,"➜ 𝙊𝙒𝙉𝙀𝙍 𝙋𝙍𝙄𝙑𝙄𝙇𝙀𝙂𝙀𝙎 𝙊𝙉𝙇𝙔 ❌");
  }
} 
