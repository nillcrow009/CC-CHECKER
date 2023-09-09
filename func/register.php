<?php
if ((strpos($message, "/register") === 0)||(strpos($message, "!register") === 0)||(strpos($message, ".register") === 0))
{
  $new = explode("\n", file_get_contents('func/users.txt'));
  foreach ($new as $ids )
    {
      $found = '0';
      if ($ids == $userId)
      {
        $found='1';
        break;
      }
    }
if ($found == '1')
{
  sendChatAction($chatId,"type");
reply_to($chatId,"➜ 𝗨𝗦𝗘𝗥 𝗔𝗟𝗥𝗘𝗔𝗗𝗬 𝗥𝗘𝗚𝗜𝗦𝗧𝗘𝗥𝗘𝗗 ! ",$message_id);
}
else
{
$file = fopen('func/users.txt','a');
fwrite($file,$userId."\n"); 
  sendChatAction($chatId,"type");
reply_to($chatId,"➜ 𝗨𝗦𝗘𝗥 𝗦𝗨𝗖𝗖𝗘𝗦𝗦𝗙𝗨𝗟𝗟𝗬 𝗥𝗘𝗚𝗜𝗦𝗧𝗘𝗥𝗘𝗗!",$message_id);
}
exit;
}
?>
