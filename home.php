<?php 
require 'koneksi.php';

$hasil = mysqli_query($koneksi, 'SELECT * FROM tb_gedung');

$data = [];
while ($d = mysqli_fetch_assoc($hasil) ){
    $data[] = $d;
}

if (isset($_GET['method'])) {
    $method = $_GET['method'];
    $id = $_GET['id'];
    if ($method == 'hapus'){
        mysqli_query($koneksi, 'DELETE FROM tb_gedung WHERE id=' . $id);
        if (mysqli_affected_rows($koneksi) > 0){
            header('Location: data.php');
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ECO FINDING - Pemprov Kalimantan Barat</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            height: 80vh;
        }
    </style>

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
                            <img src="assets/img/dummy/urskota.png" alt="">
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
			<div> 
					<!--<div class="col-md-12 text-center my-auto">-->
				<div> 
					<!--<div class="card my-3 card-block d-flex no-b" >
                    <div class="card-body align-items-center d-flex justify-content-center  center; color: blue"">-->
                    <div>   
                            <h3 class="card-title" id="selamat-datang"></h3>
							<!--<span class="responsive"><img class="image" src="gambar/pontianak100.png"></span>
							<span class="responsive"><img class="image" src="gambar/rskota100.png"></span>
							<center class="left">  
								
								<h3>RSUD Sultan Syarif Mohamad Alkadrie</h3>
								<h5></h5>
							</center>-->

                       
                    </div>
                   
                </div>
            </div>
		<table class="table table-bordered">
			<td style="background-color:#2E8B57    ;">
			<div class="cleaner_h30">
			<div class="row clearfix">                    
				<marquee style="background:url(gambar/p8.jpg);"> <img src="gambar/pemprov.png" /> <font face="Courier New" color="white" size="5">"Selamat Datang Di ECO FINDING (e-Tracking Building Directory) Pemprov Kalimantan Barat" </marquee>
			<div class="cleaner_h30"></div>
		  
        </table>
            <div class="col-md-9 b-r">
                <!-- <div class="card-group pt-3 pb-3"> -->
                    <div class="card">
                        <!-- <img class="card-img-top" id="card-gambar" src="assets/img/demo/portfolio/p8.jpg" alt="card image cap"> -->
                        <div id="map"></div>
                    </div>
            </div>
            <?php 
            include('sidebar.php');
            ?>
        </div>
    </div>


<!-- Right Sidebar -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <div class="embed-responsive embed-responsive-16by9" id="yt-player">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div> -->
        <h3 class="mw-100" style="text-align: center;">Silahkan Pilih Jalan Masuk Menujuxx</h3>
        <h3 class="mw-100" id="ruangan-txt" style="text-align: center; color: red">...</h3>
        <div class="card-group pt-3 pb-3">
                <div class="card">
                    <a href="#" onclick="getVidUrl(0)">
                        <img class="card-img-top" src="gambar/masuk_utama.jpg" alt="card my-4 image cap">
                        <div class="card-footer">
                            <h3 class="text-muted">Pintu Masuk IGD</h3>
                        </div>
                    </a>
                </div>
                
            </div>
        <input type="hidden" name="bookId" id="bookId" value=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="playModal" tabindex="-1" role="dialog" aria-labelledby="playModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="playModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9" id="yt-player">
          <iframe class="embed-responsive-item" id="source" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script src="side.js"></script>
<script>

            getLocation();

            function getLocation(){
                if (navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
            }

            function showPosition(position){
                let lat = -0.06168270372840462;
                let long = 109.35269197369153;

                var map = L.map('map', {
                    center: [lat, long],
                    zoom: 20    
                });

                var myIcon = L.icon({
                    iconUrl: 'assets/user.png',
                    iconSize: [40,40],
                    iconAnchor: [20, 40],
                    popupAnchor: [-3, -36],
                });

                // L.marker([lat,long]).addTo(map);

                let data = <?php echo json_encode($data); ?>;

                console.log(data);

                data.map(function(d){
                    L.marker([d.latitude, d.longitude],{
                        icon: myIcon
                    }).addTo(map).bindPopup(`
                            <p>
                            <i class="fa-solid fa-building"></i>
                            <b>Gedung</b>: ${d.gedung}
                            </p>
                            <p>
                            <i class="fa-solid fa-building"></i>
                            <b>Unit</b>: ${d.unit}
                            </p>
                            <p>
                            <i class="fa-solid fa-building"></i>
                            <b>Lantai</b>: ${d.lantai}
                            </p>
                            <p>
                            <i class="fa-solid fa-building"></i>
                            <b>OPD</b>: ${d.opd}
                            </p>
                    `);
                })

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar', attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
            }


            
        </script>
</body>
</html>