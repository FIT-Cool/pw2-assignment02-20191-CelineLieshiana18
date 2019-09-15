<?php 
function getAllPasien(){
    $link = new PDO("mysql:host=localhost;dbname=prakpw220191","root","");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM pasien";
    $result = $link->query($query);
    return $result;
}

?>