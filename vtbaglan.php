<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=okul", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>