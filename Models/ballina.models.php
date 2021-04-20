<?php
require_once "connection.php";

class BallinaModels{

    static public function MdlAddBallina($table,$data){

        $query = Connection::connect()->prepare("INSERT INTO $table(pershkrimi1,pershkrimi2)VALUES (:pershkrimi1,:pershkrimi2)");

        $query->bindParam(":pershkrimi1", $data['pershkrimi1'],PDO::PARAM_STR);
        $query->bindParam(":pershkrimi2", $data['pershkrimi2'],PDO::PARAM_STR);

        if($query->execute()){

            return "ok";
        }else{
            return "error";
        }

        $query->close();
        $query = null;

    }

    static public function MdlAddGallery($table,$data){

        $query = Connection::connect()->prepare("INSERT INTO $table(foto)VALUES (:foto)");

        $query->bindParam(":foto", $data['foto'],PDO::PARAM_STR);

        if($query->execute()){

            return "ok";
        }else{
            return "error";
        }

        $query->close();
        $query = null;

    }

    static public function MdlEditBallina($table,$data){

        $query = Connection::connect()->prepare("UPDATE $table SET pershkrimi1 = :pershkrimi1,pershkrimi2 = :pershkrimi2 WHERE id = :id");

        $query -> bindParam(":id", $data['id'],PDO::PARAM_INT);
        $query -> bindParam(":pershkrimi1", $data['pershkrimi1'],PDO::PARAM_STR);
        $query -> bindParam(":pershkrimi2", $data['pershkrimi2'],PDO::PARAM_STR);

        if($query -> execute()){

            return "ok";
        }else{

            return "error";
        }

        $query -> close();
        $query =null;

    }

    static public function MdlEditGallery($table,$data){

        $query = Connection::connect()->prepare("UPDATE $table SET foto = :foto WHERE id = :id");

        $query -> bindParam(":id", $data['id'],PDO::PARAM_INT);
        $query -> bindParam(":foto", $data['foto'],PDO::PARAM_STR);

        if($query -> execute()){

            return "ok";
        }else{

            return "error";
        }

        $query -> close();
        $query =null;

    }

    static public function MdlShowBallina($table,$item,$value){

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
    }

    static public function MdlShowBallinaCount($table){

        $query = Connection::connect()->prepare("SELECT count(*) FROM $table");

        $query ->execute();

        return $query -> fetchColumn();

        $query -> close();

        $query -> null;
    }

    static public function MdlDeleteBallina($table,$data){

        $query = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");

        $query -> bindParam(":id",$data,PDO::PARAM_INT);

        if($query -> execute()){

            return "ok";
        }else{

            return "error";
        }

        $query->close();
        $query = null;
    }

}
?>
