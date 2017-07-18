
<?php
require("vtbaglan.php");

session_start();
if(!(isset($_SESSION["yonetici_id"])))
	{
		    	Echo "<script>window.location='index.php';</script>"; 
		
		exit;
	}	


 if(isset($_GET['ogretmen_id'])) {
    $id = $_GET['ogretmen_id'];
 
    
 
    foreach($id as $cek) {
        $query = $db->query("UPDATE ogretmenler SET durum = '0' WHERE ogretmen_id=$cek", PDO::FETCH_ASSOC);
    }}


Echo "<script>window.location='yoneticiekle.php';</script>"; 
		


?>

