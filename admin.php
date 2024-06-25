<?php
session_start();

if (!isset($_SESSION['username']))
    header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>
<body class="light sidebar-mini sidebar-collapse">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php
    include('Rsidebar.php');
?>
<a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
    <i></i>
</a>
<div class="has-sidebar-left has-sidebar-tabs">
    <!--navbar-->
    <div class="sticky">
        <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
            <div class="relative">
                <div class="d-flex">
                    <div class="d-none d-md-block">
                        <h1 class="nav-title">Dashboard</h1>
                    </div>
                </div>
            </div>
            <!--Top Menu Start -->
        </div>
    </div>
    <!--#navbar-->
    <div class="container-fluid relative animatedParent animateOnce my-3">
        <div class="row row-eq-height my-3 mt-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-danger text-white">
                            <a href="ruangan.php"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-shop s-18"></i></div>
                                    
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-shop"></i></div>
                                    Ruangan
                                </div>

                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-deep-purple accent-1 text-white">
                            <a href="pintu.php"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-border_all s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-border_all"></i></div>
                                    Pintu Masuk
                                </div>

                            </div></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-yellow darken-3 text-white">
                            <a href="#" onclick="alert('Vitur Belum Tersedia')"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-ondemand_video s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-ondemand_video"></i></div>
                                    Video
                                </div>

                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-light-green darken-1 text-white">
                            <a href="depan.php"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-house s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-house"></i></div>
                                    Home
                                </div>

                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-cyan darken-3 text-white">
                            <a href="lantai.php"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-path s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-path"></i></div>
                                    Lantai
                                </div>

                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-red lighten-2 text-white">
                            <a href="user.php"><div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-profile-3 s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-profile-3"></i></div>
                                    User
                                </div>

                            </div></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

</body>
</html>