<?php
include_once "system/autoload.php";
$url=$_GET["url"];//girilen url yi kaydeder.


   //explode("/",$url)url yi işaretine göre ayır örneğin: merhaba/dünya yı: merhaba yı ayrı dünyayı ayrı alır
   //array filter ise örneğin merhaba/dünya/ bu sondaki sılaştan sonrası boşsa alma, filtrele


$url=array_filter(explode("/",$url)); // örnek Array ( [0] => controller [1] => method [2] => parametre [3] => 5 )

$control=$url[0];
$method=$url[1];
//$parametre=$url[2];
if(isset($url[2])){ // burası kendi mantığım bir yanlışlık olabilir. normalde örnedğin: hlocalhost/router/mycontrol/method
// methotdan sonra bir şey yazmadığı için hata veriyordu $url[2] boş olduğu için


    $parametre=$url[2];
}
else {$parametre=" ";}

$a=new $control();
echo $a->$method($parametre);




