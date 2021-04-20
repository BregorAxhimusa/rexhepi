<?php
$item = null;
$value = null;
$profile = ProfileController::showProfile($item, $value);

foreach ($profile as $key => $value) {

    $id = $value['id'];
    $name = $value['emri'];
    $password = $value['password'];
    $email = $value['email'];
    $location = $value['lokacioni'];
    $photo = $value['foto'];
    $phone = $value['telefoni'];
}
?>
<title>Profili</title>
<section id="veshtro-shfrytezuesin">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <div class="card ml-lg-0 ml-md-5 mb-5 mt-5 custom-card-marketing">
                    <div class="card-body p-5">
                        <div class="mt-4 mb-5 justify-content-center d-lg-flex">
                            <img src="Views/assets/images/profile/<?php echo $photo;?>" class="user-profile" alt="">
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <label for="">Emri</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="emri" value="<?php echo $name; ?>" class="form-control">
                                <input type="hidden" name="userId" value="<?php echo $id; ?>">
                            </div>
                            <label for="foto">Image</label>
                            <div class="custom-file mb-3">
                                <input type="file" name="editPicture" id="editPicture" class="custom-file-input editPicture">
                                <img src="Views/assets/images/gallery/user.png" width="150px" class="img-fluid text-center preview" alt="">
                                <label class="custom-file-label" for="customFile"></label>
                                <input type="hidden" name="currentPicture" value="<?php echo $photo; ?>">
                            </div>
                            <label for="">Email</label>
                            <div class="input-group flex-nowrap">
                                <input type="email" name="email" value="<?php echo $email;?>" class="form-control">
                            </div>
                            <label for="">Fjalekalimi</label>
                            <div class="input-group flex-nowrap">
                                <input type="password" name="editPassword" placeholder="Write new password" class="form-control">
                                <input type="hidden" value="<?php echo $password; ?>" name="currentPassword">
                            </div>
                            <label for="">Telefoni</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="telefoni" value="<?php echo $phone;?>" class="form-control">
                            </div>
                            <label for="">Lokacioni</label>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="lokacioni" value="<?php echo $location;?>" class="form-control">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success mt-3 float-right">Ruaj</button>
                        </form>
                        <?php
                            $editProfile = new ProfileController();
                            $editProfile->editProfile();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
