<title>Ballina</title>
<section id="veshtro-shfrytezuesin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form action="" class="ml-lg-5 ml-md-5 mt-5" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pm">Pershkrim rreth Misionit te Kompanise</label>
                        <textarea class="form-control mt-1" name="description1" id="pm" rows="8" cols="8" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pp">Pershkrim i pergjithshem</label>
                        <textarea class="form-control" name="description2" id="pp" rows="8" cols="8" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">Shto te dhenat</button>
                </form>
                <?php
                $addBallina = new BallinaController();
                $addBallina->addBallina();
                ?>
            </div>
            <div class="col-lg-6">
                <form action="" class="ml-lg-5 ml-md-5 mt-5" method="POST" enctype="multipart/form-data">
                    <label for="foto">Foto(1 e ma shume)</label>
                    <div class="form-group custom-file">
                        <label class="custom-file-label" for="customFile">Zgjidh fotot</label>
                        <input type="file" name="foto1" class="custom-file-input newPicture" id="img" required>
                        <img src="Views/assets/images/gallery/user.png" width="150px" class="img-fluid text-center preview" alt="">
                    </div>
                    <button type="submit" name="submit1" class="btn btn-success mt-4 ml-auto">Shto Foto</button>
                </form>
                <?php
                $addGallery = new BallinaController();
                $addGallery->addGallery();
                ?>
            </div>
        </div>
        <div class="row ml-md-3 mt-5">
            <div class="col-lg-12">
                <h6>Te dhenat per Header</h6>
                <div class="custom-scroll-table table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Pershkrimi rreth Misionit te Kompanise</th>
                                <th scope="col">Pershkrimi i pergjithshem</th>
                                <th scope="col">Opcionet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $item = null;
                            $value = null;
                            $ballina = BallinaController::showBallina($item, $value);

                            foreach ($ballina as $key => $value) {

                                echo '      <tr>
                                <td class="pt-3">' . ($key + 1) . '</td>
                                <td class="pt-3">' . $value['pershkrimi1'] . '</td>
                                <td class="pt-3">' . $value['pershkrimi2'] . '</td>
                                <td class="pt-3">
                                    <button class="btn custom-a btnEditBallina" bid="' . $value['id'] . '" data-toggle="modal" data-target="#change-ballina">
                                        <i class="fas fa-pen text-primary btn-icon mr-1"></i>
                                    </button>
                                    <button class="btn custom-a btnDeleteBallina" bid="' . $value['id'] . '">
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
            <div class="col-lg-12">
                <h6>Fotot per Header</h6>
                <div class="custom-scroll-table table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fotot</th>
                                <th scope="col">Opcionet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $item = null;
                            $value = null;
                            $gallery = BallinaController::showGallery($item, $value);

                            foreach ($gallery as $key => $value) {

                                echo '   <tr>
                                <td class="pt-3">' . ($key + 1) . '</td>
                                <td>
                                    <img src="Views/assets/images/gallery/' . $value['foto'] . '" class="avatar circle" width="40px" height="40px" alt="">
                                </td>
                                <td class="pt-3">
                                    <button class="btn custom-a btnEditGallery" gid="' . $value['id'] . '" currentPicture="' . $value['foto'] . '" data-toggle="modal" data-target="#change-gallery">
                                        <i class="fas fa-pen text-primary btn-icon mr-1"></i>
                                    </button>
                                    <button class="btn custom-a btnDeleteGallery" gid="' . $value['id'] . '" currentPicture="' . $value['foto'] . '">
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
    <!-- change User -->
    <div class="modal fade" id="change-ballina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Ndrysho te dhenat</h5>
                    <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle btn-icon"></i>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-12">
                        <label class="mt-5" for="">Pershkrim rreth Misionit te Kompanise</label>
                        <div class="input-group flex-nowrap">
                            <textarea type="text" name="editDescription1" id="editDescription1" class="form-control" required></textarea>
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <label class="mt-5" for="">Pershkrim i pergjithshem</label>
                        <div class="input-group flex-nowrap">
                            <textarea type="text" name="editDescription2" id="editDescription2" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-link mr-auto" data-dismiss="modal">Mbyll</button>
                        <button type="submit" name="submit" class="btn btn-success">Perditso</button>
                    </div>
                </form>
                <?php
                $editBallina = new BallinaController();
                $editBallina->editBallina();
                ?>
            </div>
        </div>
    </div>
    <!--change gallery photo-->
    <div class="modal fade" id="change-gallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Ndrysho te dhenat</h5>
                    <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle btn-icon"></i>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-12">
                        <label for="foto">Foto</label>
                        <div class="custom-file">
                            <input type="file" name="editPicture" class="custom-file-input newPicture" id="customFile">
                            <input type="hidden" class="form-control" id="gid" name="id">
                            <img src="Views/assets/images/gallery/user.png" width="150px" class="img-fluid text-center preview mt-3" alt="">
                            <label class="custom-file-label" for="customFile">Zgjidh fotot</label>
                            <input type="hidden" name="currentPicture1" id="currentPicture1">
                        </div>
                    </div>
                    <div class="modal-footer border-0 mt-5">
                        <button type="button" class="btn btn-link mr-auto" data-dismiss="modal">Mbyll</button>
                        <button type="submit" name="submit123" class="btn btn-success">Perditso</button>
                    </div>
                </form>
                <?php
                $editGallery = new BallinaController();
                $editGallery->editGallery();
                ?>
            </div>
        </div>
    </div>
</section>
<?php
$deleteBallina = new BallinaController();
$deleteBallina->deleteBallina();
?>
<?php
$deleteGallery = new BallinaController();
$deleteGallery->deleteGallery();
?>
