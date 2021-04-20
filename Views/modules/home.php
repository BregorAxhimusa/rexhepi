<?php
$item = null;
$value = null;
$ballina = BallinaController::showBallina($item, $value);

foreach ($ballina as $key => $value) {
    $pershkrimi1 = $value['pershkrimi1'];
    $pershkrimi2 = $value['pershkrimi2'];
}
?>
<title>Home - Rexhepi</title>
<main class="home-main" id="main">
    <div class="row banner pl-2">
        <div class="bg-images col-12">
            <div class="topleft container">
                <h1 class="lang" key="find">Find your solution</h1><span class="lang" key="uan">well and quickly.</span>
                <p class="lang" key="find">We have a lot of work done successfully.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-between py-3">
            <div class="col-lg-5">
                <div class="card  mt-md-5">
                    <div class="card-body home-cbody">
                        <div class="row">
                            <div class="col-lg-9 text-left">
                                <span class="looking text-left lang" key="looking">Are</span>
                                <span class="used text-left lang" key="usedcaar">you Looking for solutions?</span>
                                <p class="text-custom mt-3 text-left">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque At vero eos et accusamus et iusto odio
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mt-md-5">
                    <div class="card-body home-cbody">
                        <div class="row">
                            <div class="col-lg-9">
                                <span class="looking text-left lang" key="looking">Are</span>
                                <span class="used text-left lang" key="usedcaar">you Looking for solutions?</span>
                                <p class="text-custom mt-3 text-left">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque At vero eos et accusamus et iusto odio
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-clickpage" class="container mt-5">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="gallery-slider">
                            <div class="item">
                                <div class="clearfix">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <?php
                                        $item = null;
                                        $value = null;
                                        $gallery = BallinaController::showGallery($item, $value);

                                        foreach ($gallery as $key => $value) {
                                            echo '  <li data-thumb="Views/assets/images/gallery/' . $value['foto'] . '">
                                            <img src="Views/assets/images/gallery/' . $value['foto'] . '" class="img-fluid slider-images" />
                                        </li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row justify-content-center mt-3">
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/windows/100/000000/terms-and-conditions.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <p class="textt lang">Contract</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/ios/50/000000/digger.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <p class="textt lang">Bagger</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/ios/50/000000/sts-crane.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <p class="textt lang">STS Kran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/wired/64/000000/road-worker.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <p class="textt lang" key="engine">Road Workers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/ios/50/000000/mechanical-spring.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <!--                      qetu ki me ndrru me qit njo me kablla (kabelbau) lypet ajo ma skatsisht-->
                                            <p class="textt lang" key="engine">Mechanical spring</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-2 px-0">
                                    <div class="card card-c-clickpage">
                                        <div class="card-body">
                                            <p class="text-center pt-1">
                                                <img src="https://img.icons8.com/ios/50/000000/mechanistic-analysis.png" />
                                            </p>
                                            <p class="text-d">2020</p>
                                            <p class="textt lang" key="engine">Mechanical Analysis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 px-0">
                                    <nav class="mt-5">
                                        <div class="nav nav-pills nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link lang active" key="Vehicle" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                About Us
                                            </a>
                                            <a class="nav-item nav-link lang" key="Technical" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                Technical base
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <h6>Company Mission</h6>
                                            <p class="mb-0"><?php echo $pershkrimi1; ?></p>
                                            <h6 class="pt-0 mb-0">Description</h6>
                                            <p><?php echo $pershkrimi2; ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <h6>Basic Elements</h6>
                                            <div class=" card-body">
                                                <ul class="list-unstyled w-100 w-md-25">
                                                    <li>Contract: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    <li>Excavators: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    <li>STS Crane: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    <li>Road Workers: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    </li>
                                                    <li>Mechanical spring: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    </li>
                                                    <li>Mechanical Analysis: <span>
                                                            <i class="fas fa-check text-success"></i>
                                                        </span class="float-right">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side -->
                    <?php
                    $item = null;
                    $value = null;
                    $profile = ProfileController::showProfile($item, $value);

                    foreach ($profile as $key => $value) {
                        $email = $value['email'];
                        $emri = $value['emri'];
                        $foto = $value['foto'];
                        $telefoni = $value['telefoni'];
                        $lokacioni = $value['lokacioni'];
                    }
                    ?>
                    <div class="col-lg-3">
                        <div class="container">
                            <div class="row right-side">
                                <div class="card mt-5 mt-md-0 contact col-12 border-gray">
                                    <div class="card-body px-0">
                                        <h5 class="lang" key="dc"><i class="far fa-address-card text-primary mr-2"></i>Contact Us</h5>
                                        <img src="Views/assets/images/profile/<?php echo $foto; ?>" class="col-lg-12 col-md-6 col-8 pl-0 mt-2" height="130px" alt="">
                                        <p class="mt-3 lang" key="name">Name:
                                            <label><?php echo $emri; ?></label>
                                        </p>
                                        <p class="lang" key="email">E-mail:
                                            <label><?php echo $email; ?></label>
                                        </p>
                                        <p class="lang" key="phone">Phone:
                                            <label><?php echo $telefoni; ?></label>
                                        </p>
                                    </div>
                                </div>
                                <div class="card col-12 border-gray mt-2">
                                    <h5 class=" pt-3 lang" key="leavecc"><i class="far fa-envelope text-primary mr-2"></i>Leave a comment
                                    </h5>
                                    <form method="post">
                                        <div class="form mt-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="emri" placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="pershkrimi" placeholder="Description" id="" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn py-3 w-100 lang" key="send">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    $createMessage = new MessageController();
                                    $createMessage->createMessage();
                                    ?>
                                </div>
                                <div class="card col-12 border-gray mt-2">
                                    <h5 class=" pt-3 lang" key="leavecc"><i class="fas fa-location-arrow text-primary mr-2"></i>Click diretions to come and visit us!
                                    </h5>
                                    <div class="mt-2" id="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.7143199013713!2d14.362375017419016!3d46.236025582677726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ab7fa3c051d95%3A0x95712b5aac83e38f!2sUlica%20Nikole%20Tesle%207b%2C%204000%20Kranj%2C%20Slovenia!5e0!3m2!1sen!2s!4v1598469314930!5m2!1sen!2s" class="img-fluid" height="300px" frameborder="0" style="border:1;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.querySelector("#price-range").addEventListener('input', function() {
        document.querySelector('#price-value').textContent = document.querySelector('#price-range').value + " €";
    });
</script>