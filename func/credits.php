 <?php
if ((strpos($message, "/credits") === 0)||(strpos($message, "!credits") === 0)||(strpos($message, ".credits") === 0))
{
 if($role == 'PREMIUM' || $role == 'OWNER' || $chtrole == 'PREMIUM')
 {
  $cred = explode("\n", file_get_contents('func/premium.txt'));
   $cred1[] = array();
foreach ($cred as $creds )
    {
      $cred1[0] = substr($creds,0,11);
      $cred1[1] = substr($creds,0,10);
      if (($cred1[0] == $userId) || ($cred1[1] == $userId))
      {
        $usercrd = substr($creds,11);
        if(empty($usrcrd))
          $usercrd = substr($creds,10);
        sendChatAction($chatId,"type");
       reply_to($chatId,urlencode(" 
➜ 𝗬𝗢𝗨𝗥 𝗖𝗥𝗘𝗗𝗜𝗧𝗦 : $usercrd
"),$messageId);
exit;
        break;
      }
    }
 }
else
{
  // sendChatAction($chatId,"type");
reply_to($chatId,urlencode("
➜ 𝗨𝗦𝗘𝗥 𝗦𝗧𝗔𝗧𝗨𝗦: 𝗙𝗥𝗘𝗘 
➜ 𝗔𝗦𝗞 𝗢𝗪𝗡𝗘𝗥 𝗧𝗢 𝗕𝗨𝗬 
"),$messageId);
exit();
}
}
?>