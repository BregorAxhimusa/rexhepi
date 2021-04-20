<?php

class ProfileController{

    static public function profileLogin(){

        if(isset($_POST['submit'])){

            if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST['email']) && preg_match('/^[a-zA-Z0-9]+$/',$_POST['password'])){

                $encrypt = crypt($_POST["password"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $password = $_POST['password'];
                $table = "profile";

                $item ="email";
                $value = $_POST['email'];

                $answer = ProfileModels::MdlShowProfile($table,$item,$value);

                if($answer['email'] == $_POST['email'] && $answer['password'] == $encrypt){

                    $_SESSION['beginSession'] = 'ok';
                    $_SESSION['id'] = $answer['id'];
                    $_SESSION['emri'] = $answer['emri'];
                    $_SESSION['email'] = $answer['email'];
                    $_SESSION['foto'] = $answer['foto'];
                    $_SESSION['telefoni'] = $answer['telefoni'];
                    $_SESSION['lokacioni'] = $answer['lokacioni'];

                    echo "<script>
window.location = 'ballina';
</script>";

                }else{

                    echo "<br><div class='alert alert-danger'>Email ose fjalekalimi juaj nuk eshte i sakte</div>";
                }
            }
        }
    }//userLogin



    static public function editProfile(){

        if(isset($_POST['submit'])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["emri"]) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){

                $image = $_POST['currentPicture'];

                if (isset($_FILES['editPicture']['tmp_name']) && !empty($_FILES['editPicture']['tmp_name'])) {

                    $target_dir = "Views/assets/images/profile/";
                    $image = basename($_FILES["editPicture"]["name"]);
                    $imageFileType = pathinfo($target_dir . $image, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['editPicture']['tmp_name'], $target_dir . $image);

                    if($_POST['currentPicture'] != ""){

                        unlink("Views/assets/images/profile/".$_POST['currentPicture']);
                    }else{

                        rmdir("Views/assets/images/profile/".$_POST['currentPicture']);
                    }

                }

                $table = "profile";

                if($_POST['editPassword'] != ""){

                    if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editPassword"])){

                        $encrypt = crypt($_POST["editPassword"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    }else{

                        echo '<script>

	swal({
						type: "error",
						title: "Nuk lejohen karaktere speciale ose kutite e zbrazeta!",
						showConfirmButton: true,
						confirmButtonText: "Close"

						}).then(function(result){

							if(result){

								window.location = "profile";
							}

						});

</script>';

                    }

                }else{

                    $encrypt = $_POST['currentPassword'];

                }

                $data = array('id' => $_POST['userId'],'emri' => $_POST["emri"],'email' => $_POST["email"],'password' => $encrypt,'foto' => $image,'telefoni' => $_POST['telefoni'],'lokacioni' => $_POST['lokacioni']);

                $answer = ProfileModels::MdlEditProfile($table,$data);

                if($answer == "ok"){

                    echo '<script>
				    swal({
				        icon: "success",
				        title: "Perdoruesi u perditesua me sukses!",
				        showConfirmButton: true,
				        confirmButtonText: "Close"

				    }).then(function(result) {

				        if (result) {
				            window.location = "profile";
				        }

				    });
				</script>';

                }else{
                    echo '<script>

	swal({
						type: "error",
						title: "Something wrong with query",
						showConfirmButton: true,
						confirmButtonText: "Close"

						}).then(function(result){

							if(result){

								window.location = "profile";
							}
						});
</script>';


                }


            }else{
                echo '<script>

	swal({
						type: "error",
						title: "No especial characters or blank fields",
						showConfirmButton: true,
						confirmButtonText: "Close"

						}).then(function(result){

							if(result){

								window.location = "profile";
							}
						});
</script>';
            }

        }//isset
    }//edit user


    static public function showProfile($item,$value){
        $table = 'profile';
        $answer = ProfileModels::MdlShowProfile($table,$item,$value);

        return $answer;
    }//showProfile

}//class
