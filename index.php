<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}
if (isset($_POST['submit'])) {
	 $database = file_get_contents("user.json");
	$database = json_decode($database, TRUE);
	if($_POST['username']!='' && $_POST['password']!='') {
	    foreach ($database['records'] as $datas) {
	        if($datas['username'] == $_POST['username']) {
	            if($datas['password'] == $_POST['password']) {
	                $_SESSION['username'] =$datas['username'];
        			header("Location: admin.php");
	            } else {
	                $_SESSION['error'] = "Username atau password Anda salah!";
        			header("Location: index.php");
	            }
	        } else {
	            $_SESSION['error'] = "Username atau password Anda salah!";
        		header("Location: index.php");
	        }
	    }
	} else {
	    $_SESSION['error'] = "Harap isi semua kolom yang tersedia!";
        header("Location: index.php");
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
    <title>Login - WayFinding RSUD SSA</title>
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
<div class="page parallel">
    <div class="d-flex row">
        <div class="col-md-3 white">
            <div class="p-3 mt-3">
            	<center><img src="gambar/pontianak.png" style="width: 120px; " alt=""/></center>
            </div>
            <div class="p-5">
                <h3>Selamat Datang</h3>
                <p>Anda harus login untuk dapat mengelola aplikasi ini.</p>
                <form action="" method="POST">
                    <div class="form-group has-icon"><i class="icon-user"></i>
                        <input type="text" name="username" class="form-control form-control-lg"
                               placeholder="Username">
                    </div>
                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                        <input type="text" name="password" class="form-control form-control-lg"
                               placeholder="Password">
                    </div>
                    <?php
                    if (isset($_SESSION['error'])) {
                    ?>
                    <div class="alert alert-danger" role="alert">
				        <?php 
				        	echo $_SESSION['error'];
				        ?>
				    </div>
				    <?php
					}
				    ?>
                    <button name="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
        <div class="col-md-9  height-full blue accent-3 align-self-center text-center d-none d-md-block" data-bg-repeat="false"
             data-bg-possition="center">
        </div>
    </div>
</div>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

</body>
</html>

