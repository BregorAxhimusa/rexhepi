<?php
require_once "connection.php";

class ProfileModels{

static public function MdlShowProfile($table,$item,$value){

if($item != null){

$query = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

$query ->bindParam(":".$item,$value,PDO::PARAM_STR);

$query ->execute();

return $query -> fetch();

}else {

$query = Connection::connect()->prepare("SELECT * FROM $table");

$query ->execute();

return $query -> fetchAll();
}

$query -> close();

$query -> null;
}// showProfile 


static public function MdlEditProfile($table,$data){

$query = Connection::connect()->prepare("UPDATE $table SET emri = :emri,email = :email,password = :password,foto = :foto,telefoni = :telefoni,lokacioni = :lokacioni WHERE id = :id");

$query -> bindParam(":id",$data['id'],PDO::PARAM_INT);
$query -> bindParam(":emri",$data['emri'],PDO::PARAM_STR);
$query -> bindParam(":email",$data['email'],PDO::PARAM_STR);
$query -> bindParam(":password",$data['password'],PDO::PARAM_STR);
$query -> bindParam(":foto",$data['foto'],PDO::PARAM_STR);
$query -> bindParam(":telefoni",$data['telefoni'],PDO::PARAM_STR);
$query -> bindParam(":lokacioni",$data['lokacioni'],PDO::PARAM_STR);

if($query -> execute()){

return "ok";
}else{

return "error";
}

$query->close();
$query = null;
}//


}//class
