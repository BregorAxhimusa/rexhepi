<?php

class BallinaController{

    static public function addBallina(){

        if(isset($_POST['description1'])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ `!.,-]+$/', $_POST["description1"])){

$homeCount = BallinaController::showBallinaCount();
if($homeCount == 0){

                $table = "ballina";
                $data = array('pershkrimi1' => $_POST["description1"],'pershkrimi2' => $_POST["description2"]);

                $answer = BallinaModels::MdlAddBallina($table,$data);

                if($answer == "ok"){

                    echo '<script>
				    swal({
				        icon: "success",
				        title: "Ballina u shtua me sukses!",
				        showConfirmButton: true,
				        confirmButtonText: "Close"

				    }).then(function(result) {

				        if (result) {
				            window.location = "ballina";
				        }

				    });
				</script>';

                }
}else{

                echo '<script>

	                   swal({
						icon: "error",
						title: "Ballina nuk mund te shtohet sepse ekziston nje!",
						showConfirmButton: true,
						confirmButtonText: "Close"

						}).then(function(result){

							if(result){

								window.location = "ballina";
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

								window.location = "ballina";
							}
						});
</script>';
            }
                    
                    }//isset
                    }//addBallina

static public function editBallina(){

if (isset($_POST["editDescription1"])) {
			
if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ `!.,-]+$/', $_POST["editDescription1"])){

 $table = "ballina";
 $data = array('id' => $_POST['id'],
               'pershkrimi1' => $_POST['editDescription1'],
               'pershkrimi2' => $_POST['editDescription2']);

 $answer = BallinaModels::MdlEditBallina($table, $data);

 if ($answer == 'ok') {

 echo '<script>
                                swal({
    
                                title: "Te dhenat jane ndryshuar me sukses!!",
                                icon: "success",
                                buttons: {
                                cancel: false,
                                confirm: true,
                                }
                              }).then((result) => {
    
                                if (result) {
                            window.location = "ballina";
                            }
                            })
                            
</script>';
 }
			}else{

				echo '<script>
					
					swal({
						type: "error",
						title: "Nuk lejohen karaktere speciale ose kutite e zbrazeta!",
						showConfirmButton: true,
						confirmButtonText: "Close"
			
						}).then(function(result){

							if(result){

								window.location = "ballina";
							}
						});	
				</script>';
			}
		}
    }

static public function editGallery(){

if (isset($_POST["submit123"])) {
			
$image = $_POST['currentPicture1'];
  
if (isset($_FILES['editPicture']['tmp_name']) && !empty($_FILES['editPicture']['tmp_name'])) {

$target_dir = "Views/assets/images/gallery/";
$image = basename($_FILES["editPicture"]["name"]);
$imageFileType = pathinfo($target_dir . $image, PATHINFO_EXTENSION);
move_uploaded_file($_FILES['editPicture']['tmp_name'], $target_dir . $image);

if($_POST['currentPicture1'] != ""){

unlink("Views/assets/images/gallery/".$_POST['currentPicture1']);
}else{

rmdir("Views/assets/images/gallery/".$_POST['currentPicture1']);
}

}

 $table = "gallery";
 $data = array('id' => $_POST['id'],
               'foto' => $image);

 $answer = BallinaModels::MdlEditGallery($table, $data);

 if ($answer == 'ok') {

 echo '<script>
                                swal({
    
                                title: "Te dhenat jane ndryshuar me sukses!!",
                                icon: "success",
                                buttons: {
                                cancel: false,
                                confirm: true,
                                }
                              }).then((result) => {
    
                                if (result) {
                            window.location = "ballina";
                            }
                            })
                            
</script>';
 }
		}
    }


    static public function addGallery(){

        if(isset($_POST['submit1'])){

                if (isset($_FILES['foto1']['tmp_name'])){

                    $target_dir = "Views/assets/images/gallery/";
                    $image = basename($_FILES["foto1"]["name"]);
                    $imageFileType = pathinfo($target_dir . $image, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['foto1']['tmp_name'], $target_dir . $image);
                }

                $table = "gallery";
                $data = array('foto' => $image);

                $answer = BallinaModels::MdlAddGallery($table,$data);

                if($answer == "ok"){

                    echo '<script>
				    swal({
				        icon: "success",
				        title: "Galeria u shtua me sukses!",
				        showConfirmButton: true,
				        confirmButtonText: "Close"

				    }).then(function(result) {

				        if (result) {
				            window.location = "ballina";
				        }

				    });
				</script>';

                }   
                    }//isset
                    }//addGallery

static public function showBallinaCount(){
$table = 'ballina';
$answer = BallinaModels::MdlShowBallinaCount($table);

return $answer;
}

static public function showBallina($item,$value){
$table = 'ballina';
$answer = BallinaModels::MdlShowBallina($table,$item,$value);

return $answer;
}

static public function showGallery($item,$value){
$table = 'gallery';
$answer = BallinaModels::MdlShowBallina($table,$item,$value);

return $answer;
}

static public function deleteBallina(){

if(isset($_GET['bid'])){

$table = "ballina";
$data = $_GET["bid"];

$query = BallinaModels::MdlDeleteBallina($table,$data);

if($query == "ok"){
echo '<script>
   swal({
        title: "Ballina eshte fshire me sukses!",
        icon: "success",
        buttons: {
            cancel: false,
            confirm: true,
        }
    }).then((result) => {

        if (result) {
            window.location = "ballina";
        }
    })
</script>';
  }
 }
}

static public function deleteGallery(){

if(isset($_GET['gid'])){

$table = "gallery";
$data = $_GET["gid"];

if($_GET['foto'] != ""){
unlink('Views/assets/images/gallery/'.$_GET['foto']);
    }

$query = BallinaModels::MdlDeleteBallina($table,$data);

if($query == "ok"){
echo '<script>
   swal({
        title: "Foto eshte fshire me sukses!",
        icon: "success",
        buttons: {
            cancel: false,
            confirm: true,
        }
    }).then((result) => {

        if (result) {
            window.location = "ballina";
        }
    })
</script>';
  }
 }
}

}//class
                    
?>
