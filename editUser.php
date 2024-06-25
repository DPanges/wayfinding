<?php
session_start();

if (!isset($_SESSION['username']))
    header("Location: index.php");

?>
<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('user.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["records"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('user.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["records"];
    $jsonfile = $jsonfile[$id];

    $post["username"] = isset($_POST["username"]) ? $_POST["username"] : "";
    $post["keterangan"] = isset($_POST["keterangan"]) ? $_POST["keterangan"] : "";
    $post["password"] = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($jsonfile) {
        $file = file_get_contents('user.json');
        $data = json_decode($file, true);
        
        unset($all["records"][$id]);
        $all["records"][$id] = $post;
        $all["records"] = array_values($all["records"]);
        file_put_contents("user.json", json_encode($all));
    }
    header("Location:user.php");
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
    <title>Wayfinding - User</title>
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
									<h1>Edit User</h1>
                                	<hr>
                            	</div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-3">
                                        </div>
                                      <div class="col-sm-5 col-sm-offset-3">
                                        <?php if (isset($_GET["id"])): ?>
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
                                            <form method="POST" action="editUser.php">
                                               <div class="form-group">
                                                <input type="hidden" value="<?php echo $id ?>" name="id"/>
                                                <label for="namaRuangan">Username</label>
                                                <input type="text" class="form-control" required="required" id="username" value="<?php echo $jsonfile["username"] ?>" name="username" placeholder="Username">
                                                <span class="help-block"></span>
                                               </div>
                                               
                                               <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea required="required" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"><?php echo $jsonfile["keterangan"] ?></textarea>
                                                <span class="help-block"></span>
                                               </div>
                                                <div class="form-group">
                                                 <label for="password">Password</label>
                                                 <input  type="text" value="<?php echo $jsonfile["password"] ?>" class="form-control" required="required" id="password" name="password" placeholder="Password">
                                                      <span class="help-block"></span>
                                                 <span class="help-block"></span>
                                                      </div>
                                                
                                               <div class="form-actions">
                                                 <button type="submit" class="btn btn-success">Simpan</button>
                                                 <a class="btn btn btn-danger" href="user.php">kembali</a>
                                               </div>
                                            </form>
                                            <?php endif; ?> 
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