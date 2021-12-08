<?php             
/*
if(isset($_GET['kapi'])){ // GET dizisi içersinde katid adlı isimlendirme var mı
    $katid=$_GET['katid'];
}else{
    $katid=0;
}
*/
// Get dizisi içersinde isimlendirilmiş dizi değerlerini değişken olarak oluştur.
extract($_GET);

if(!isset($urunid)){ // !false => true , !true => false
    $urunid=0;
}       

require_once("config.php");
require_once("dbconnect.php");        
$db=new DBConnect();

if($urunid == 0){
    $sql="SELECT * FROM urunler ";
}else{
    //$sql="SELECT * FROM urunler WHERE katid=$katid";
    $sql="SELECT * FROM urunler WHERE urunid=$urunid";
}

$data=$db->fetchAllData($sql);
echo json_encode($data);        

