<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="odyssesy-ks">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Views/assets/css/main.css" rel="stylesheet">
    <link href="Views/assets/css/responsive.css" rel="stylesheet">
    <link href='Views/assets/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="dashboard-body">
    <div class="d-flex" id="wrapper">
        <?php include("sidebar.php") ?>
        <?php
$item = null;
$value = null;
$profile = ProfileController::showProfile($item, $value);
foreach ($profile as $key => $value) {
    $photo = $value['foto']; 
}
?>
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <nav class="navbar box-shadow">
                <div class="container-fluid justify-content-end">
                    <ul class="nav text-right">
                        <li class="nav-item dropdown ml-auto">
                            <a class="nav-link dropdown-toggle text-black-50" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="Views/assets/images/profile/<?php echo $photo; ?>" alt="user_img" class="img-fluid user_img ml-1 mr-1">
                                Besmir
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="show-mobile d-block d-md-none">
                                    <a class="dropdown-item" href="profile">Profili im</a>
                                    <a class="dropdown-item" href="ballina">Ballina</a>
                                    <a class="dropdown-item" href="mesazhet">Mesazhet</a>
                                </div>
                                <a class="dropdown-item" href="logout">Dil</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
