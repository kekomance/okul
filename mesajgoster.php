<?php
require("vtbaglan.php");

session_start();
if(!(isset($_SESSION["yonetici_id"])))
	{
		    	Echo "<script>window.location='index.php';</script>"; 
		
		exit;
	}	

$yonetici_id=$_SESSION["yonetici_id"];
$sorgu=$db->query("SELECT * from ogretmenler WHERE ogretmen_id=$yonetici_id", PDO::FETCH_ASSOC);// Yönetici_ id si ile yöneticinin(öğretmenin) adını soyadını çekiyoruz..
foreach ($sorgu as $yaz ) 
{  $yonetici_adi=$yaz["ogretmen_adi"] ; 
   $yonetici_soyadi=$yaz["ogretmen_soyadi"];


}


?>
<!DOCTYPE html>
<html>
<head>
	<title>duyuru</title>
</head>
<body>
 
<table border=1  width="800" height="650" align="center">
	<tr> <td colspan="2" width="100" height="150"> <div align="left"> DUYURULAR </div> <div align="right"> <?php echo"$yonetici_adi $yonetici_soyadi"; ?>   </div></td> </tr>
	

	<tr>
	 <td width="100" > <table border=1> <!--  MESAJIN SOLDAKİ KISMI-->
    
     
		 <?php 

		$sorgu = $db->query("SELECT * FROM mesajlar order by mesaj_id desc", PDO::FETCH_ASSOC);//id yi en sondan geriye doğru çekiyoruz..
			if ( $sorgu->rowCount() ){
   			 
   			  foreach( $sorgu as $cek) {
   			  	$kimden= $cek["kim"]; 
   			  	
   			 echo"$kimden <br>";
    
					

 							}
 						}	
 						 
?>
 		
  </table>
</body>
</html>