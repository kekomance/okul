<html>

<form action="oturumac.php"  method="POST">
<table   width="846" height="610" align="center" border=0>

<tr align="center"> <td colspan="2" width="846"> <h1>BANNER EKLENECEK VS :)</h1> </td></tr>


<tr> 

<td> 
<table border=1 align="center"> 
<tr> <td align="center" bgcolor="#00FFFF"> ÖĞRENCİ GİRİŞİ </td> </tr> <tr> <td> <input type="text" name="ogrenci_tckimlik" placeholder="TC kimlik numaranı gir."> </td>  </tr> 
<tr> <td> <input type="text" name="ogrenci_numara" placeholder="Okul numaranı gir"> </td> </tr> <tr> <td align="center"> <input type="submit" name="ogrencigonder" value="GİRİŞ"> </td> </tr>
</table>           
</td>

<td>
<table border=1 align="center"> 
<tr> <td align="center" bgcolor="#00FFFF"> ÖĞRRETMEN GİRİŞİ </td> </tr> <tr> <td> <input type="text" name="ogretmenno" placeholder="Kullanıcı adını gir"> </td>  </tr> 
<tr> <td> <input type="tect" name="ogretmenparola" placeholder="Parolanı gir"> </td> </tr> <tr> <td align="center"> <input type="submit" name="ogretmengonder" value="GİRİŞ"> </td> </tr>

</table>  
</td>

</tr> 

<tr><!-- duyuru kısmı-->
<td colspan="2">

<div color="orange">DUYURULAR </div><br> <br>

<?php
require("vtbaglan.php");

$sorgu = $db->prepare("SELECT COUNT(*) FROM duyurular");//KAÇ TANE DUYURU OLDUĞUNU BULUYORUZ.
$sorgu->execute();
$say = $sorgu->fetchColumn();//şuan için gerekli olmayan bir bilgi burada dursun lazım olur olmazsa sileriz ;)

$sorgu = $db->query("SELECT * FROM duyurular order by duyuru_id  desc limit 4 ", PDO::FETCH_ASSOC);//son 4 duyuru gösteril
if ( $sorgu->rowCount() ){
     foreach( $sorgu as $cek) {
     	$duyuru_id=$cek["duyuru_id"];

       echo $cek["tarih"]; echo"  ";echo"Tarihli Duyuru"; echo"  "; echo"<a href='duyurusayfa.php?id2=$duyuru_id'>"; echo $cek["baslik"]; echo"</a>"; echo"<br>"; echo"<hr />";

         	
    
     }
        
}


?>
</td>
</tr><!-- //duyuru kısmı-->
 
</form>
</html>


