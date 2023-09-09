<?php
if ((strpos($message, "/redeem") === 0)||(strpos($message, "!redeem") === 0)||(strpos($message, ".redeem") === 0))
{
  $r = substr($message,8);
if($r == ' ' || $r == '') 
{
  sendChatAction($chatId,"type");
reply_to($chatId,"➜ 𝗜𝗡𝗩𝗔𝗟𝗜𝗗 𝗖𝗢𝗗𝗘 ❌",$messageId);
exit();

}

$rdm = explode("\n", file_get_contents('func/codes.txt'));
foreach ($rdm as $cds )
    {
      $found = '0';
      $cds1 = substr($cds,0,19);
      if ($cds1 == $r)
      {
        $cdbln = substr($cds,20);
        $dir = "func/codes.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($cds, '', $contents);
file_put_contents($dir, $contents);
        $prm = explode("\n", file_get_contents('func/users.txt'));
foreach ($prm as $prmd )
  {
      if ($prmd == $userId)
      {
        $dir = "func/users.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($userId, '', $contents);
file_put_contents($dir, $contents);
        break;
      }
  }
$chkf = explode("\n", file_get_contents('func/premium.txt'));
foreach ($chkf as $chkd)
  {
    $crd2 = '0';
    $chkds = substr($chkd,0,10);
    if($userId == $chkds)
    {
      $crd2 = '1';
      $credit = substr($chkd,11);
      $credit = $credit + $cdbln;
      $dir = "func/premium.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($chkd, '', $contents);
file_put_contents($dir, $contents);
      $file = fopen('func/premium.txt','a');
fwrite($file,$userId." ".$credit."\n");
      break;
    }
  }
if ($crd2 == '0')
{
$file = fopen('func/premium.txt','a');
fwrite($file,$userId." 100"."\n"); 
}
  $found='1';
  break;
      }
    }
if ($found == '1')
{
  sendChatAction($chatId,"type");
reply_to($chatId,"➜ 𝗦𝗨𝗖𝗘𝗦𝗦",$messageId);
}  
  if ($found == '0')
  {
    sendChatAction($chatId,"type");
    reply_to($chatId,"𝗜𝗡𝗩𝗔𝗟𝗜𝗗 𝗖𝗢𝗗𝗘 ❌ $cds",$messageId);
exit;
  }
}

?>