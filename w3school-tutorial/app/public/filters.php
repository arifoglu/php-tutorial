<?php 

/////////////////////////////// Sanitize a string 
$txt = "<h6>Hello World</h6>" ;
$newtxt = filter_var($txt,FILTER_SANITIZE_STRING);
echo $newtxt;
echo "<br>";

/////////////////////////////// validate integer
$numero = 10;
if(filter_var($numero,FILTER_VALIDATE_INT) ===  false)
{
    echo "not integer";
}
else
{
    echo "integer";
}
// 2.option
//$check = (!filter_var($numero,FILTER_VALIDATE_INT) === false ) ? "integer" :  "not integer";
//echo $check;
echo "<br>";

$numero2 = 0;
if(filter_var($numero2,FILTER_VALIDATE_INT) === 0 || !filter_var($numero2,FILTER_VALIDATE_INT) === false)
{
    echo "$numero2 integer  is valid";
}
else
{
    echo "$numero2 is not valid";
}
echo "<br>";

/////////////////////////////// validate IP adress

$ip = "127.0.0.1";
$checkIp = (!filter_var($ip,FILTER_VALIDATE_IP) === false ) ? "$ip is valid" : "$ip is not valid" ;
echo $checkIp; 
echo "<br>";

$ip2 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
$checkIp2 = (!filter_var($ip2 ,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) === false) ? "$ip2 is valid" : "$ip2 is not valid";
echo $checkIp2;
echo "<br>";

/////////////////////////////// validate email adress
$email = "john.dou@example.com";

//1. sanitize email
$email = filter_var($email , FILTER_SANITIZE_EMAIL);

//2. validate
$checkemail = (!filter_var($email ,FILTER_VALIDATE_EMAIL) === false ) ? "$email is valid" : " $email is not valid";
echo $checkemail; 
echo "<br>";

/////////////////////////////// validate URL 
$url = "https://www.google.com";

//1.sanitize url
$url = filter_var($url ,FILTER_SANITIZE_URL);

//2.validate 
$checkurl = (!filter_var($url,FILTER_VALIDATE_URL) === false ) ? "$url is valid" : "$url is not valid";
echo $checkurl;
echo "<br>";

?>