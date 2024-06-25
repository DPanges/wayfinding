<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>ECO FINDING - Pemprov Kalimantan Barat</title>
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
<!--<div id="app">
<aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
    <div class="sidebar">
        <div class="d-flex hv-100 align-items-stretch">
            <div class="indigo text-white">
                <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a href="index.php">
                        <figure class="avatar">
                            <img src="assets/img/dummy/u3.png" alt="">
                            <span class="avatar-badge online"></span>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>

<a class="paper-nav-toggle left ml-2 fixed">
    <i></i>
</a>-->

    <!--navbar-->
    
    <!--#navbar-->
    <div class="container-fluid relative animatedParent animateOnce p-0">
        <div class="row no-gutters">
            <div class="col-md-9 b-r">
                <!-- <div class="card-group pt-3 pb-3"> -->
                    <div class="col-md-12 text-center my-auto">
                <div class="card my-3 card-block d-flex no-b" >
                    <div class="card-body align-items-center d-flex justify-content-center ; color: green">
                        <div>
                            <h3 class="card-title"><font face="Courier New" color="white" size="5">DAFTAR NAMA SEMUA RUANGAN <br> PEMPROV KALIMANTAN BARAT</h3></font>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            
            <div class="row row-eq-height my-3">
                <?php
                    $getfile = file_get_contents('ruangan.json');
                    $jsonfile = json_decode($getfile);
                    $no=0;foreach ($jsonfile->records as $index => $obj):  $no++;
                ?>
                <div class="col-md-3 pb-3">
                    <a data-toggle="modal" data-id="<?php echo $obj->namaRuangan?>" href="#daftarModal" class="daftarModal">
                        <div class="card">
                            <img class="card-img-top" src="gambar/<?php echo $obj->gambar?>" alt="card my-3 image cap">
                            <div class="card-footer">
                                <small class="text-muted"><?php echo $obj->namaRuangan?> - <?php echo $obj->lantai?></small>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>       
            </div>
            
            </div>
            <?php 
            include('sidebar.php');
            ?>
        </div>
    </div>

<!-- Right Sidebar -->
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script src="side.js"></script>
</body>
</html>