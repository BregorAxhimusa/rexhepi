<?php

class MessageController{

static public function createMessage(){

		if (isset($_POST["emri"])) {
			
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ `-]+$/', $_POST["emri"]) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ `!.-]+$/', $_POST["pershkrimi"])){


				$table = 'message';

				$data = array('emri' => $_POST["emri"],
                'email' => $_POST['email'],
				'pershkrimi' => $_POST["pershkrimi"]);

				$answer = MessageModel::MdlAddMessage($table, $data);

				if ($answer == 'ok') {

				echo '<script>
                            swal({

                            title: "Mesazhi eshte derguar me sukses!!",
                            icon: "success",
                            buttons: {
                            cancel: false,
                            confirm: true,
                            }
                          }).then((result) => {

                            if (result) {
                        window.location = "home";
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

			    }).then(function(result) {

			        if (result) {

			            window.location = "home";
			        }
			    });
			</script>';
			}
		}
}

static public function showMessage($item,$value){
$table = 'message';
$answer = MessageModel::MdlShowMessage($table,$item,$value);

return $answer;
}

static public function deleteMessage(){

if(isset($_GET['messageId'])){

$table = "message";
$data = $_GET["messageId"];

$query = MessageModel::MdlDeleteMessage($table,$data);

if($query == "ok"){
echo '<script>
   swal({
        title: "Te dhenat jane fshire me sukses!",
        icon: "success",
        buttons: {
            cancel: false,
            confirm: true,
        }
    }).then((result) => {

        if (result) {
            window.location = "mesazhet";
        }
    })
</script>';
  }
 }
}//deletePikearritja

} //class
