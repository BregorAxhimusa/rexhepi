<?php
require_once "../Controllers/profile.controller.php";
require_once "../Models/profile.models.php";
class AjaxProfile{

public $photo;

public function ajaxValidatePhoto(){

    $item = "foto";
    $value = $this->photo; 

    $answer = ProfileController::showProfile($item,$value);

    echo json_encode($answer);
    }


}//class

if(isset($_POST['photo'])){

$valPhoto = new AjaxProfile();
$valPhoto -> photo = $_POST['photo'];
$valPhoto -> ajaxValidatePhoto();
}
?>
