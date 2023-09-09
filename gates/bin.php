<?php 
if ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){
  $message = substr($message, 5);
$message = clean($message);
$bin = substr($message,0,6);
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://bins.su/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: bins.su';
    $headers[] = 'Origin: http://bins.su';
    $headers[] = 'Referer: http://bins.su/';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&bank=&country=');
$result = curl_exec($ch);
    $bincap1 = trim(strip_tags(getStr($result, '<td>Bank</td></tr><tr><td>','</td>')));
    $country = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));
    $brand = trim(strip_tags(getStr($result, '<td>'.$country.'</td><td>','</td>')));
    $level = trim(strip_tags(getStr($result, '<td>'.$brand.'</td><td>','</td>')));
    $type = trim(strip_tags(getStr($result, '<td>'.$level.'</td><td>','</td>')));
    $bank = trim(strip_tags(getStr($result, '<td>'.$type.'</td><td>','</td>')));
  if((empty($bank)) && (empty($country)) && (empty($brand)) && (empty($type)))
  {
    $msg = "𝗡𝗢𝗧 𝗩𝗔𝗟𝗜𝗗 ❌";
    goto binn;
  }
if(empty($bank))
{
  $bank = "N/A";
}
  if(empty($country))
{
  $country = "N/A";
}
  if(empty($brand))
{
  $brand = "N/A";
}
  if(empty($type))
{
  $type = "N/A";
}
$msg = urlencode(
  "
𝗩𝗔𝗟𝗜𝗗 𝗕𝗜𝗡 ✅
 
➜ 𝘽𝙄𝙉: $bin - $brand
➜ 𝘽𝘼𝙉𝙆: $bank
➜ 𝘾𝙊𝙐𝙉𝙏𝙍𝙔: $country
➜ 𝙏𝙔𝙋𝙀: $type 

$header
𝗕𝗢𝗧 𝗕𝗬 - $bowner"
);
  binn:
 reply_to($chatId,$msg,$messageId);

}
?>