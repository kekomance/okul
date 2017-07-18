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
<tr><td> <a href="mesaj.php">MAİL GÖNDER </a> </td> </tr>
<tr><td> VSVSVSVSVSV </td> </tr>
<tr><td> vsvsvsvsvs</td> </tr>
</table> 

<td colspan="2"> 
 
<?php 

echo " <table border=0 align='center'>";



 if(isset($_GET['ogrenci_id'])) // Eğer öğrenci_id geldiyse aşşağıdakileri yap
  {
    
   $id = $_GET['ogrenci_id'];//mesaj.php den ogrenci id'leri çekiyoruz
    echo"<h3 align='center'> Lütfen Mesajınızı Girin <h/3>";
    
echo"<tr> <form action='' method='POST'>
 
 <td height='150'> <textarea rows='10' cols='40' name='mesaj'> </textarea> </td></tr> <tr><td align='right'> <input type='submit' value='GÖNDER'> 
</form>

</td>  <tr height='25'><td height='25'> <h5 align='center'> Alıcılar </h5></td> <tr>";   

@$mesaj=$_POST["mesaj"];//aynı sayfaya post ediyoruz

$tarih = date("d.m.Y"); // Geçerli sistem tarihini almak için 
$sayi=0;
foreach($id as $cek) { //aldığımız id leri foreach ile $cek e atıyoruz.
	
$sayi++;
$sorgu=$db->query("SELECT * from ogrenciler  where ogrenci_id='$cek'", PDO::FETCH_ASSOC);//yukarıda foreach ile id leri $cek e atıp döngüyü başlatıyoruz
foreach ($sorgu as $yaz) {
	

echo"<tr><td> $sayi.";  echo $yaz['ogrenci_adi']; echo"&nbsp"; echo $yaz['ogrenci_soyadi'];  echo" <hr></td> </tr> "; //Mesaj gönderilecek kişiler.

$sorgu3 = $db->prepare("INSERT INTO mesajlar SET baslik = ?, mesaj = ?, tarih=?, gonderen_id=?, alici_id=?, kimden=?");// MESAJ İNSERT EKLEME BURADA YAPILIYOR.
$sorgu3->execute(array("merhaba", $mesaj, $tarih, $yonetici_id, $cek,"yönetici"));

}
    
       
}
    
echo"</tr>";
echo" </table> <br> ";//END
}



	 if(isset($_GET['ogretmen_id'])) // Eğer öğretmen_id geldiyse aşşağıdakileri yap
{
  echo"<h3 align='center'> Lütfen Mesajınızı Girin <h/3>";
 
    $id = $_GET['ogretmen_id'];//mesaj.php den ogretme_id'leri çekiyoruz
    
echo"<tr> <form action='' method='POST'>
 
 <td height='150'> <textarea rows='10' cols='40' name='mesaj'> </textarea> </td></tr> <tr><td align='right'> <input type='submit' value='GÖNDER'> 
</form>

</td>  <tr height='25'><td height='25'> <h5 align='center'> Alıcılar </h5></td> <tr>";   

@$mesaj=$_POST["mesaj"];//aynı sayfaya post ediyoruz

$tarih = date("d.m.Y"); // Geçerli sistem tarihini almak için 
$sayi=0;
foreach($id as $cek) { //aldığımız id leri foreach ile $cek e atıyoruz.
	
$sayi++;
$sorgu=$db->query("SELECT * from ogretmenler  where ogretmen_id='$cek'", PDO::FETCH_ASSOC);//yukarıda foreach ile id leri $cek e atıp döngüyü başlatıyoruz
foreach ($sorgu as $yaz) {
	

echo"<tr><td> $sayi.";  echo $yaz['ogretmen_adi']; echo"&nbsp"; echo $yaz['ogretmen_soyadi'];  echo" <hr></td> </tr> "; //Mesaj gönderilecek kişiler.

$sorgu3 = $db->prepare("INSERT INTO mesajlar SET baslik = ?, mesaj = ?, tarih=?, gonderen_id=?, alici_id=? kim=?");// MESAJ İNSERT EKLEME BURADA YAPILIYOR.
$sorgu3->execute(array("merhaba", $mesaj, $tarih, $yonetici_id, $cek,"yönetici"));

}
    
       
}
   } 
echo"</tr>";//END

	 if(isset($_GET['yonetici_id'])) // Eğer YÖNETİCİ_İD geldiyse aşşağıdakileri yap
{
  echo"<h3 align='center'> Lütfen Mesajınızı Girin <h/3>";
 
    $id = $_GET['yonetici_id'];//mesaj.php den ogretme_id'leri çekiyoruz
    
echo"<tr> <form action='' method='POST'>
 
 <td height='150'> <textarea rows='10' cols='40' name='mesaj'> </textarea> </td></tr> <tr><td align='right'> <input type='submit' value='GÖNDER'> 
</form>

</td>  <tr height='25'><td height='25'> <h5 align='center'> Alıcılar </h5></td> <tr>";   

@$mesaj=$_POST["mesaj"];//aynı sayfaya post ediyoruz

$tarih = date("d.m.Y"); // Geçerli sistem tarihini almak için 
$sayi=0;
foreach($id as $cek) { //aldığımız id leri foreach ile $cek e atıyoruz.
	
$sayi++;
$sorgu=$db->query("SELECT * from ogretmenler  where ogretmen_id='$cek'", PDO::FETCH_ASSOC);//yukarıda foreach ile id leri $cek e atıp döngüyü başlatıyoruz
foreach ($sorgu as $yaz) {
	

echo"<tr><td> $sayi.";  echo $yaz['ogretmen_adi']; echo"&nbsp"; echo $yaz['ogretmen_soyadi'];  echo" <hr></td> </tr> "; //Mesaj gönderilecek kişiler.

$sorgu3 = $db->prepare("INSERT INTO mesajlar SET baslik = ?, mesaj = ?, tarih=?, gonderen_id=?, alici_id=?, kim=?");// MESAJ İNSERT EKLEME BURADA YAPILIYOR.
$sorgu3->execute(array("merhaba", $mesaj, $tarih, $yonetici_id, $cek,"yönetici"));

}
    
       
}
   } 
echo"</tr>";//END

echo" </table> <br> ";


	


?>

</td>

</td>

</td>
</tr>
</table>


</html>







