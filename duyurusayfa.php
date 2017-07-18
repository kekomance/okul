<?php
require("vtbaglan.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>duyuru</title>
</head>
<body>
 
<table border=1  width="800" height="650" align="center">
	<tr> <td colspan="2" width="100" height="150"> <div align="left"> DUYURULAR </div> <div align="right"> <a href="index.php"> ANASAYFA </a></div></td> </tr>
	

	<tr>
	 <td width="100" > <table border=1> <!--  MESAJIN SOLDAKİ KISMI-->
    
     
		 <?php 

		$sorgu = $db->query("SELECT * FROM duyurular order by duyuru_id desc", PDO::FETCH_ASSOC);//id yi en sondan geriye doğru çekiyoruz..
			if ( $sorgu->rowCount() ){
   			  foreach( $sorgu as $cek) {
   			  	$duyuru_id= $cek["duyuru_id"];
    
					echo" <tr> <td height=20 width=100>";	echo"<a href ='duyurusayfa.php?id=$duyuru_id'>"; echo $cek["baslik"];  echo"</a>";  echo"</td></tr>";// Linkin üzerine tıklandında ona ait olan id yi çekiyoruz.

 									 

 										 }

 										}
 	  ?>
	
	
</table>
      </td> 

 <td align="center"> <!--  MESAJIN İÇERİK KISMI-->
 	 	<?php

 	 	@$id=$_GET["id"]; //BAŞINDAKİ İŞARETİ HATA ALMAMAK İÇİN KOYULDU..
 		@$id2=$_GET["id2"];


if(isset($id2)){ // İd2 deĞİŞKENİ TANIMLANILMIŞSA AŞAĞIDAKİ İŞLEMLERİ YAP.. (İd 2 yi index sayfasından çektim indexte tıklanan haberin diretk açılması için..)

$sorgu2 = $db->query("SELECT * FROM duyurular  where duyuru_id=$id2", PDO::FETCH_ASSOC);//

 if ( $sorgu2->rowCount() ){
   			  foreach( $sorgu2 as $cek2) {

   			  	echo $cek2["duyuru"];

								  }
								} 
				}


if(isset($id)){ // İd deĞİŞKENİ TANIMLANILMIŞSA AŞAĞIDAKİ İŞLEMLERİ YAP..
 
$sorgu2 = $db->query("SELECT * FROM duyurular  where duyuru_id=$id", PDO::FETCH_ASSOC);//

 

        if ( $sorgu2->rowCount() ){
   			  foreach( $sorgu2 as $cek2) {

   			  	echo $cek2["duyuru"];

								  }
								} 
			}
							
 	 ?>

	 </td>
   </tr>
  </table>
</body>
</html>