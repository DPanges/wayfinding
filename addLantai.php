<?php
session_start();

if (!isset($_SESSION['username']))
    header("Location: index.php");

?>
<?php 
    if ( !empty($_POST)) { 
        $ekstensi_diperbolehkan = array('png','jpg');
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        if (!empty($gambar)){
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                move_uploaded_file($file_tmp, 'gambar/'.$gambar);
                $_POST['gambar'] = $gambar;
                $file = file_get_contents('lantai.json');
                $data = json_decode($file, true);
                unset($_POST["add"]);
                $data["records"] = array_values($data["records"]);
                array_push($data["records"], $_POST);
                file_put_contents("lantai.json", json_encode($data));
                header("Location: lantai.php");
            }else{
                header("Location: addLantai.php?err=GX");
            }
        }else {
            header("Location: addLantai.php?err=GM");
        }          
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Wayfinding - Lantai</title>
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

<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
</div>
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
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card no-b mb-3 bg-white text-dark">
                            <div class="card-body">
                            	<div class="text-center">
									<h1>Tambah Lantai</h1>
                                	<hr>
                            	</div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-3">
                                        </div>
                                      <div class="col-sm-5 col-sm-offset-3">
                                            <?php $er = '';
                                            if(isset($_GET['err']) == "GX"){
                                                $er=$_GET['err'];
                                            }
                                            if($er == "GX"){
                                            ?>
                                            <div role="alert" class="alert alert-danger"><strong>Error!</strong> Format media yang anda masukan salah.
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if($er == "GM"){
                                            ?>
                                            <div role="alert" class="alert alert-danger"><strong>Error!</strong> Anda belum memasukan gambar.
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <form method="POST" action="" enctype="multipart/form-data">
                                               <div class="form-group">
                                                <label for="namaRuangan">Nama Lantai</label>
                                                <input type="text" class="form-control" required="required" id="nama" name="nama" placeholder="Nama Lantai">
                                                <span class="help-block"></span>
                                               </div>
                                               
                                               <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea required="required" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                                <span class="help-block"></span>
                                               </div>
                                                <div class="form-group">
                                                 <label for="gambar">Gambar</label>
                                                 <input  type="file" class="form-control" required="required" id="gambar" name="gambar">
                                                      <span class="help-block"></span>
                                                 <span class="help-block"></span>
                                                      </div>
                                                
                                               <div class="form-actions">
                                                 <button type="submit" class="btn btn-success">Simpan</button>
                                                 <a class="btn btn btn-danger" href="lantai.php">kembali</a>
                                               </div>
                                            </form>
                                    </div>
                                </div>
                              
                            </div>
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