<?php

//this code is not working now
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://iyearn.finance/test.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=0xc2579A8870391af8971A02077977D45d0ade9097&create-ref=");

$headers = array();
$headers[] = 'Host: iyearn.finance';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Length: 59';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Origin: https://iyearn.finance';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10; RMX1931 Build/QKQ1.191021.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.81 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'X-Requested-With: mark.via.gf';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://iyearn.finance/ref/zlp08QcEOo';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: PHPSESSID=v7o54fe2aumi64laj6h4k9cpsb; referral=zlp08QcEOo; utmSource=/ref/zlp08QcEOo';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

echo $result;
?>
