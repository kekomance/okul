
<?php
require("vtbaglan.php");

	session_start();
	$ogrenci_id=$_SESSION["ogrenci"];
	

$sorgu=$db->query("SELECT * from ogrenciler WHERE ogrenci_id=$ogrenci_id", PDO::FETCH_ASSOC);
foreach ($sorgu as $yaz ) 
{  $ogrenci_adi=$yaz["ogrenci_adi"] ; 
   $ogrenci_soyadi=$yaz["ogrenci_soyadi"];


}

	
if(!(isset($_SESSION["ogrenci"])))
	{
		    	Echo "<script>window.location='index.php';</script>"; 
		
		exit;
	}	
	


?>



<html>
<head><meta charset="utf-8"></head>
 
 <br>
<table border=1 align="center" width="1000" height="650">

<tr><td width="100" height="150">ÖĞRENCİ FOTOSU</td>  <td width="667" align="center"> <div align="left"> <?php  echo"$ogrenci_adi"; echo"<br>"; echo"$ogrenci_soyadi"; ?></div>BANNER GELECEK</td> <td width="50"><a href="oturumkapat.php">ÇIKIŞ</a></td></tr>

<tr>
<td width="100" ><table border=1 height="550"> 
<tr><td> DÖNEM</td> </tr> 
<tr><td> NOTLAR</td> </tr>
<tr><td> YOKLAMA </td> </tr>
<tr><td> DUYURULAR </td> </tr>
<tr><td> BELGELER </td> </tr>
<tr><td> DERS PROGRAMI </td> </tr>
<tr><td> <a href="mesaj.php?id=3">MESAJ GÖNDER </a></td> </tr>
<tr><td> MESAJLAR </td> </tr>
<tr><td> SINAV TARİHLERİ </td> </tr>
</table> 
<td colspan="2"> <h1> İÇERİK KISMI </h1></td></td>
</tr>
</table>

</html>



