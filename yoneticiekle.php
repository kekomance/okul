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

<html>
<head><meta charset="utf-8"></head>
 <form action=""  method="POST"><!-- BU SAYFAYA POST ETMEK İÇİN-->
<br>
<table border=1 align="center" width="1000" height="650">

<tr><td width="100" height="150">YÖNETİCİ FOTOSU</td>  <td width="667" align="center"><div align="left"> <?php  echo"$yonetici_adi"; echo"<br>"; echo"$yonetici_soyadi"; ?></div>BANNER GELECEK</td> <td width="50"><a href="oturumkapat.php">ÇIKIŞ</a></td></tr>

<tr>
<td width="100" ><table border=1 height="550"> 
<tr><td> <a href="ogrenciekle.php"> SİSTEME ÖĞRENCİ EKLE <a/></td> </tr> 
<tr><td> <a href="ogretmenekle.php">SİSTEME ÖĞRETMEN EKLE</a></td> </tr>
<tr><td> <a href="yoneticiekle.php">SİSTEME YÖNETİCİ EKLE</a> </td> </tr>
<tr><td><a href="duyuru.php"> DUYURU İLAN ET</a>  </td> </tr>
<tr><td> <a href="mesaj.php">MESAJ GÖNDER </a></td> </tr>
<tr><td> VSVSVSVSVSV </td> </tr>
<tr><td> vsvsvsvsvs</td> </tr>
</table> 

<td colspan="2"> 
</form>
<?php
$sorgu2=$db->query("SELECT * from ogretmenler WHERE durum='1'", PDO::FETCH_ASSOC);// Yönetici_ id si 1 olanları çekiyoruz yani öğretmenleri
echo"<table border=1 align=center>";
echo"<tr><td colspan='6'> Yönetici yapmak istediğiniz öğretmeni seçin </td> </tr>"; 
echo"<form action='yoneticiyap.php'  method='GET'>";
if ( $sorgu2->rowCount() ){

     foreach( $sorgu2 as $cek) {
     	$ogretmen_adi=$cek["ogretmen_adi"];
     	$ogretmen_soyadi=$cek["ogretmen_soyadi"];
 		$ogretmen_brans=$cek["ogretmen_brans"];
 		$ogretmen_id=$cek["ogretmen_id"];
     	

     	echo"<tr> <td> $ogretmen_adi </td>  <td> $ogretmen_soyadi </td>  <td> $ogretmen_brans </td>   <td> <input type='checkbox' value='$ogretmen_id' name='ogretmen_id[]'> </td> </tr>";
}

}




echo"<tr align='center' > <td colspan='6'> <input type='submit' value='YÖNETİCİ YAP''></td></tr>";
echo"</form>";
echo"</table>";//END



?>

</table>





</html>