<?php 

require_once "connection.php";

class MessageModel{

static public function MdlShowMessage($table,$item,$value){

if($item != null){

$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

$stmt ->bindParam(":".$item,$value,PDO::PARAM_STR);

$stmt ->execute();

return $stmt -> fetch();

}else {

$stmt = Connection::connect()->prepare("SELECT * FROM $table");

$stmt ->execute();

return $stmt -> fetchAll();
}

$stmt -> close();

$stmt -> null;
}// function 1 


static public function MdlAddMessage($table,$data){

    $query = Connection::connect()->prepare("INSERT INTO $table(emri,email,pershkrimi)VALUES (:emri,:email,:pershkrimi)");

    $query->bindParam(":emri", $data['emri'],PDO::PARAM_STR);
    $query->bindParam(":email", $data['email'],PDO::PARAM_STR);
    $query->bindParam(":pershkrimi", $data['pershkrimi'],PDO::PARAM_STR);

    if($query->execute()){

        return "ok";
}else{
        return "error";
}

$query->close();
$query = null;

}

static public function MdlDeleteMessage($table,$data){

$query = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");

$query -> bindParam(":id",$data,PDO::PARAM_INT);

if($query -> execute()){
return "ok";
}else{
return 'error';
}

$query -> close();
$query = null;

    }
}

?>
