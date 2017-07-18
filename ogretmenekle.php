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
<tr><td><a href="duyuru.php"> DUYURU İLAN ET</a> </td> </tr>
<tr><td> <a href="mesaj.php">MESAJ GÖNDER </a></td> </tr>
<tr><td> VSVSVSVSVSV </td> </tr>
<tr><td> vsvsvsvsvs</td> </tr>
</table> 

<td colspan="2"> 
 
<table align="center" height="250" bgcolor="#00FFFF">

<tr>
<td> Öğretmenin İsmi:<hr /></td><td> <input type="tex" name="ad" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğretmenin Soyismi:<hr /></td><td> <input type="tex" name="soyad" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğretmenin Branşı:<hr /></td><td> <input type="tex" name="brans" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğretmenin Kullanıcıadı:<hr /></td><td> <input type="tex" name="kullanici_adi" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<tr>
<td> Öğretmen Parola<hr /></td><td> <input type="tex" name="parola" required='bu alan boş bırakılamaz'></td>

<tr>
<td> Öğrencinin Cinsiyeti:<hr /></td><td align="center"> Erkek<input type="radio" name="cinsiyet" value="erkek">&nbsp;&nbsp;&nbsp;Kız<input type="radio" name="cinsiyet" value="kız"></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="gonder" value="gonder"> </td>
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
$ogretmen_adi=$_POST['ad'];
$ogretmen_soyadi=$_POST['soyad'];
$ogretmen_brans=$_POST['brans'];
$kullaniciadi=$_POST['kullanici_adi'];
$parola=$_POST["parola"];
$cinsiyet=$_POST["cinsiyet"];




$sorgu2 = $db->prepare("INSERT INTO ogretmenler SET ogretmen_adi = ?, ogretmen_soyadi = ?, ogretmen_brans = ?, kullaniciadi = ?, ogretmen_parola= ?, durum=?, cinsiyet=?");// İNSERT EKLEME BURADA YAPILIYOR.
$ogretmenekle = $sorgu2->execute(array($ogretmen_adi, $ogretmen_soyadi, $ogretmen_brans, $kullaniciadi, $parola, "1", $cinsiyet));
 if ($ogretmenekle)
{
     $last_id = $db->lastInsertId();
 echo "<h3 align='center'>İşleminiz Başarı ile gerçekleştirildi...</h3><br>";	
		header("Refresh:3; url=ogretmenekle.php");	

}
}


?>

