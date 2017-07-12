<html>
 <br>
<table border=1 align="center" width="1000" height="650">

<tr><td width="100" height="150">ÖĞRENCİ FOTOSU</td>  <td width="667"> BANNER GELECEK</td></tr>

<tr>
<td width="100" ><table border=1 height="550"> 
<tr><td> DÖNEM</td> </tr> 
<tr><td> NOTLAR</td> </tr>
<tr><td> YOKLAMA </td> </tr>
<tr><td> DUYURULAR </td> </tr>
<tr><td> BELGELER </td> </tr>
<tr><td> DERS PROGRAMI </td> </tr>
<tr><td> SINAV TARİHLERİ </td> </tr>
</table> 
<td > <h1> İÇERİK KISMI </h1></td></td>
</tr>
</table>

</html>



<?php
require("vtbaglan.php");


	session_start();
	if(!(isset($_SESSION["b"])))
	{
		    	Echo "<script>window.location='index.php';</script>"; 
		
		exit;
	}	



?>