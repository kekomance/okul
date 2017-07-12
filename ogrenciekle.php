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


if($_POST)//VERİLERİ BU SAYFAYA POST ETTĞİMİZ İÇİN..post yapıldı mı demek?..
{
$ogrenci_adi=$_POST['ad'];
$ogrenci_soyadi=$_POST['soyad'];
$ogrenci_tckimlik=$_POST['tckimlik'];
$ogrenci_numara=$_POST['okulno'];

$sorgu = $db->prepare("INSERT INTO ogrenciler SET ogrenci_adi = ?, ogrenci_soyadi = ?, ogrenci_tckimlik = ?, ogrenci_numara = ?");// İNSERT EKLEME BURADA YAPILIYOR.
$ekle = $sorgu->execute(array($ogrenci_adi, $ogrenci_soyadi, $ogrenci_tckimlik, $ogrenci_numara ));
if ( $ekle)
{
    $last_id = $db->lastInsertId();//ne demek olduğunu bilmiyorum.
    Echo "<script>window.location='ogrenciekle.php';</script>"; 
}
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
<tr><td> SİSTEME ÖĞRETMEN EKLE</td> </tr>
<tr><td> SİSTEME YÖNETİCİ EKLE </td> </tr>
<tr><td> DUYURU İLAN ET </td> </tr>
<tr><td> MAİL GÖNDER </td> </tr>
<tr><td> VSVSVSVSVSV </td> </tr>
<tr><td> vsvsvsvsvs</td> </tr>
</table> 

<td colspan="2"> 

<table align="center" height="250">

<tr>
<td> Öğrencinin İsmi:<hr /></td><td> <input type="tex" name="ad" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğrencinin Soyismi:<hr /></td><td> <input type="tex" name="soyad" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğrencinin TC Kimlik Numarası:<hr /></td><td> <input type="tex" name="tckimlik" required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<td> Öğrencinin Okul Numarası:<hr /></td><td> <input type="tex" name="okulno"required='bu alan boş bırakılamaz'></td>
</tr>

<tr>
<tr>
<td> Öğrencinin sınıfı:<hr /></td><td> <input type="tex" name="sinif"required='bu alan boş bırakılamaz'></td>
</tr>


<td> Öğrencinin Şubesi:<hr /></td><td> <input type="tex" name="sube"required='bu alan boş bırakılamaz'></td>
</tr>
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


