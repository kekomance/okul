<?php

require("vtbaglan.php");

$ogrenci_tckimlik=$_POST['ogrenci_tckimlik'];
$ogrenci_numara=$_POST['ogrenci_numara'];
$ogretmenno=$_POST['ogretmenno'];
$ogretmen_parola=$_POST['ogretmenparola'];


if(isset($_POST['ogrencigonder']))// BUTONA TIKLANDIMI?...

{

$sorgu=$db->prepare("SELECT * from ogrenciler WHERE ogrenci_tckimlik= ? and ogrenci_numara=?");//WHERELERİN EŞİTLİĞİNE ? İŞARETİ ATAR.(PREPARE)
$sorgu->execute(array($ogrenci_tckimlik,$ogrenci_numara)); //EXECUTE YAPARAK SORU İŞARETİ OLAN YERLERE GELEN DEĞİŞKENLERİ BELİRLER(EXECUTE)
$yaz=$sorgu->fetch(PDO::FETCH_ASSOC);//ÇEKTİĞİMİZ SORGUYU GÜVENLİ BİR ŞEKİLDE $YAZ DEĞİŞKENİNE AKTARIR

 if ( $sorgu->rowCount() )//ÇEKTİĞİMİZ SORGUNUN SATIRSAYISINA BAKAR ROWCOUNT YAPMIŞOLDUĞUN İŞLEMİN KARŞILIĞI VAR BUNLARA KARŞI BİR SATIRSAYISIVAR DEMEKTİR.
  {

    	
    	session_start();//Session ile id yi tutuyoruz..
    	$ogrenci_idi=$yaz["ogrenci_id"];
    	$_SESSION["ogrenci_id"]=$ogrenci_idi;
    	Echo "<script>window.location='ogrencianasayfa.php';</script>"; 
   
  }
else  echo "<br><br><br><center><h3><b>Kullanıcı TC KİMLİK/OKUL NUMARASI Yanlış.</b></h3><br><a href=javascript:history.back(-1)>Geri Dön</a></center>";		

}



if(isset($_POST['ogretmengonder']))
{
$sorgu2=$db->prepare("SELECT * from ogretmenler WHERE kullaniciadi=? and ogretmen_parola=?");
$sorgu2->execute(array($ogretmenno,$ogretmen_parola));
$yaz2=$sorgu2->fetch(PDO::FETCH_ASSOC);
$durum=$yaz2["durum"];//Öğretmenmi - Yöneticimi..(1=Öğretmen 0=Yönetici)
$ogretmen_id=$yaz2["ogretmen_id"];
if ( $sorgu2->rowCount() && $durum=="1")
  {
     Echo "<script>window.location='ogretmenanasayfa.php';</script>"; 

  }

if ( $sorgu2->rowCount() && $durum=="0")
  {
    session_start();
    
    $_SESSION["yonetici_id"]=$ogretmen_id;
     Echo "<script>window.location='yoneticianasayfa.php';</script>"; 

  }

else
{	echo "<br><br><br><center><h3><b>Kullanıcı Adı/Şifre Yanlış.</b></h3><br><a href=javascript:history.back(-1)>Geri Dön</a></center>";
}

}
?>