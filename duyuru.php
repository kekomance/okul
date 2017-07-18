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
<tr><td><a href="yoneticiekle.php">SİSTEME YÖNETİCİ EKLE</a> </td> </tr>
<tr><td> <a href="duyuru.php"> DUYURU İLAN ET</a>  </td> </tr>
<tr><td> <a href="mesaj.php">MESAJ GÖNDER </a></td> </tr>
<tr><td> VSVSVSVSVSV </td> </tr>
<tr><td> vsvsvsvsvs</td> </tr>
</table> 

<td colspan="2"> 
 
<table align="center" height="250" bgcolor="#00FFFF">

<tr>
<tr>
<td align="center" >

<input type="text" name="baslik" placeholder="Konu başlığını girin" maxlength="70">

</td>
</tr>
<td height="150" width="150"> <textarea rows="10" cols="40" name="duyuru"  placeholder="Yapacağınız duyuru sitenin anasa yfasına düşecektir.">
Yapacağınız duyuru sitenin anasa yfasına düşecektir.
</textarea></td>
</tr>
<tr>
<td align="center" >

<input type="submit" name="gonder" value="GÖNDER">

</td>
</tr>

</table>


</td>

</td>
</tr>
</table>


</html>


<?php

 if ( $_POST )
{
$baslik=$_POST['baslik'];
$duyuru=$_POST['duyuru'];


$tarih = date("d.m.Y"); // Geçerli sistem tarihini almak için 
 

$sorgu = $db->prepare("INSERT INTO duyurular SET baslik = ?, duyuru = ?, tarih=?");// İNSERT EKLEME BURADA YAPILIYOR.
$duyuruekle = $sorgu->execute(array($baslik, $duyuru, $tarih));
 if ($duyuruekle)
{
     $last_id = $db->lastInsertId();
 echo "<h3 align='center'>Duyuru Başarı ile gerçekleştirildi...</h3><br>";	
		header("Refresh:3; url=duyuru.php");	
}
}


?>

