<?php
require_once "../Controllers/ballina.controller.php";
require_once "../Models/ballina.models.php";
class AjaxBallina{

//Edit Member

public $bid;

public function ajaxEditBallina(){

$item = 'id';
$value = $this->bid;
$answer = BallinaController::showBallina($item,$value);

echo json_encode($answer);

}

public $gid;

public function ajaxEditGallery(){

$item = 'id';
$value = $this->gid;
$answer = BallinaController::showGallery($item,$value);

echo json_encode($answer);

}

public $photo;

public function ajaxValidatePhoto(){

    $item = "foto";
    $value = $this->photo; 

    $answer = BallinaController::showGallery($item,$value);

    echo json_encode($answer);
    }


}//class

if(isset($_POST['bid'])){

$edit = new AjaxBallina();
$edit -> bid = $_POST['bid'];
$edit -> ajaxEditBallina();
}

if(isset($_POST['gid'])){

$editGallery = new AjaxBallina();
$editGallery -> gid = $_POST['gid'];
$editGallery -> ajaxEditGallery();
}

if(isset($_POST['photo'])){

$valPhoto = new AjaxBallina();
$valPhoto -> photo = $_POST['photo'];
$valPhoto -> ajaxValidatePhoto();
}
?>
