<title>Mesazhet</title>
<section id="veshtro-shfrytezuesin">
    <div class="container-fluid">
        <div class="row ml-lg-5 ml-md-5 mt-5">
            <div class="col-lg-6 col-md-12">
                <div class="input-group mt-2">
                    <div class="search input-group-prepend">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fas fa-search text-secondary"></i>
                        </span>
                    </div>
                    <input class="form-control search border-left-0" type="text" placeholder="Kerko" aria-label="Search" id="searchInput">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="custom-scroll-table table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Emri</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pershkrimi</th>
                                <th scope="col">Opcioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$item = null;
$value = null;
$message = MessageController::showMessage($item,$value);

foreach ($message as $key => $value){

echo '    <tr>
                                <td class="pt-3">'.($key+1).'</td>
                                <td class="pt-3">'.$value['emri'].'</td>
                                <td class="pt-3">'.$value['email'].'</td>
                                <td class="pt-3">'.$value['pershkrimi'].'</td>
                                <td class="pt-3">
                                    <button class="btn btnDeleteMessage custom-a" messageId="'.$value['id'].'">
                                        <i class="far fa-trash-alt text-danger btn-icon ml-1"></i>
                                    </button>
                                </td>
                            </tr>';

}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$deleteMessage = new MessageController();
$deleteMessage -> deleteMessage();
?>
