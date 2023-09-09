<?php 
include('funct/functions.php');
if(isset($_GET['tgid']))
  $tgid = $_GET['tgid'];
else 
    $tgid = null;
if(isset($_GET['ip']))
   $cip = $_GET['ip'];
else 
  $cip = null;
renew:
$new = explode("\n", file_get_contents('func/ips.txt'));
foreach ($new as $ids )
{
  $found = '0';
  $fndd = '0';
  //$sfid2 = $ids;
  $sfid = $ids;
  $ids = substr($ids,0,10);
  if ($ids == $tgid)
  {
    $found='1';
    $ip2 = explode("|",$sfid);
    $ip2 = $ip2[3];
   //sendMessage("5813794105",$sfid2,0);
    break;
  }
} 
if($found == '0')
{
  echo "NO USER PREMIUM FOUND";
 exit();
}
if(empty($ip2))
   {
   $dir = "func/ips.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($sfid, "$sfid"."$cip|", $contents);
file_put_contents($dir, $contents);
     goto renew;
   // echo $retry = "IP SUCESSFULLY LOGGED. NOW PUT ID.";
    // exit();
   }

  if(($ip2 == $cip) && ($found == '1'))
  {
    $fndd = '1';
    goto chk;
  }
if(($fndd == '0') && ($found == '1'))
  {
  echo "UserLogged:FALSE";
  exit();
}
//sendMessage("5813794105",$sfid,0);
chk:
$ext = explode(" ", $sfid);
$day = date("Y-m-d H:i:s");
//sendMessage("5813794105
//","$ext[1] $ext[2] ",0);
$ext1 = "$ext[1] $ext[2]";
$ext = urlencode("$ext[1] $ext[2]");
$oldate = new DateTime($ext1);
$newdate = new DateTime($day);
$interval = $oldate->diff($newdate);

if (($newdate > $oldate) || ($ext == $day))
{
 echo "SUBSCRIPTION ENDS";
  $dir = "func/ips.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($sfid, '', $contents);
file_put_contents($dir, $contents);
  exit();
}

//sendMessage("5813794105",$ext,0);
if(($fndd == '1') && ($found == '1'))
  echo "UserLogged:TRUE";
else
  echo "UserLogged:FALSE";


?>