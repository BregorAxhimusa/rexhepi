<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="odyssesy-ks">
    <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Views/assets/css/main.css" rel="stylesheet">
    <link href="Views/assets/css/responsive.css" rel="stylesheet">
    <link rel='stylesheet' href='Views/assets/css/all.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="Views/assets/css/lightslider.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="bg-green">
    <header id="header">
        <nav class="navbar pt-1 pb-2">
            <div class="container">
                <a class="navbar-brand" href="home">
                    <!-- <img src="Views/assets/images/logo.png" alt="RentaCar" class="img-fluid"> -->
                </a>
                <ul class="nav text-right">
                    <li class="nav-item dropdown mt-2 d-flex">
                        <a class="nav-link  text-black-50" href="#" id="lagnuages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gjuhë
                        </a>
                        <select onchange="doGTranslate(this);" class="form-control translate-input py-2 mr-2">
                            <option value="">Zgjidhni gjuhën tuaj</option>
                            <option value="sv|en">English</option>
                            <option value="sv|sq">Albanian</option>
                            <option value="sv|de">German</option>
                            <option value="sv|sl">Slovenian</option>
                        </select>
                        <div id="google_translate_element2"></div>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="mt-2 btn custom-sw btn-round">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>