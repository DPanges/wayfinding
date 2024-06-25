<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>SIPETA - RSUD Sultan Syarief Mohammad Al-Kadrie</title>
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
<div class="has-sidebar-left has-sidebar-tabs">
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
                <marquee style="background:url(gambar/p8.jpg);"> <img src="gambar/pontianak60.png" /> <img src="gambar/rskota80.png" /> <font face="Courier New" color="white" size="5">"Selamat Datang Di Sistem Petunjuk Arah (S I P E T A) RSUD Sultan Syarif Mohamad Alkadrie" </marquee>
            <div class="cleaner_h30"></div>
          
        </table>
            <div class="col-md-9 b-r">
                <!-- <div class="card-group pt-3 pb-3"> -->
                    <div class="card">
                        <!-- <img class="card-img-top" id="card-gambar" src="assets/img/demo/portfolio/p8.jpg" alt="card image cap"> -->
                        <!-- <iframe class="card-img-top" width="1268" height="713" src="https://www.youtube.com/embed/SzMsqIDFPLE" title="SELAYANG PANDANG UPT RSUD SULTAN SYARIF MOHAMAD ALKADRIE KOTA PONTIANAK TAHUN 2021" frameborder="0" allowfullscreen></iframe> -->
                    </div>
            </div>
            <?php 
            include('sidebar.php');
            ?>
        </div>
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
        <h3 class="mw-100" style="text-align: center;">Silahkan Pilih Jalan Masuk Menuju</h3>
        <h3 class="mw-100" id="ruangan-txt" style="text-align: center; color: red">...</h3>
        <div class="card-group pt-3 pb-3">
                <div class="card">
                    <a href="#" onclick="getVidUrl(0)">
                        <img class="card-img-top" src="gambar/pintu_igd.jpg" alt="card my-4 image cap">
                        <div class="card-footer">
                            <h3 class="text-muted">Pintu Masuk IGD</h3>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" onclick="getVidUrl(1)">
                        <img class="card-img-top" src="gambar/pintu_lobby_depan.jpg" alt="card my-4 image cap">
                        <div class="card-footer">
                            <h3 class="text-muted">Lobby Depan </h3>
                        </div>
                    </a>    
                </div>
                <div class="card">
                    <a href="#" onclick="getVidUrl(2)">
                        <img class="card-img-top" src="gambar/pintu_lobby_belakang.jpg" alt="card my-4 image cap">
                        <div class="card-footer">
                            <h3 class="text-muted">Lobby Belakang</h3>
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

</body>
</html>