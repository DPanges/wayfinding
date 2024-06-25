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
                        <h1 class="nav-title">User</h1>
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
									<h1>Daftar User</h1>
                                	<hr>
                            	</div>
                            	<div class="text-left">
									<a class="btn btn-primary" href="addUser.php"><i class="icon-plus"></i> Tambah Data</a><br><br>
                            	</div>
                                <div class="text-center">

                                	<?php
										$getfile = file_get_contents('user.json');
										$jsonfile = json_decode($getfile);
										?>
                                       <table class="table table-striped table-bordered table-hover">
									    <tr>
									     <th>No.</th>
									     <th>Username</th>
									     <th>Keterangan</th>
									     <th>Password</th>
									     <th>Aksi</th>
									    </tr>  
									    <?php $no=0;foreach ($jsonfile->records as $index => $obj): $no++;  ?>
									    <tr>
									     <td><?php echo $no; ?></td>
									     <td><?php echo $obj->username; ?></td>
									     <td><?php echo $obj->keterangan; ?></td>
									     <td><?php echo $obj->password; ?></td>
									     <td>
									      <a class="btn btn-xs btn-primary" href="editUser.php?id=<?php echo $index; ?>">Edit</a>
									      <a class="btn btn-xs btn-danger" href="deleteUser.php?id=<?php echo $index; ?>">Delete</a>
									     </td>
									    </tr>
									    <?php endforeach; ?>
									   </table>
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