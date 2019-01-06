<?php 
  include "koneksi.php"; 
  session_start();
    if (!isset($_SESSION['login'])) {
        header('location:login.php');
       }
       
	include "koneksi.php";
	$id=$_GET['id'];
	$ambil = "SELECT * FROM download WHERE id=$id";
	$query = mysqli_query($koneksi, $ambil);
	while($pecah=mysqli_fetch_array($query)){
		if (mysqli_num_rows($query)>0) {
			$judul=$pecah['judul'];
      $tanggal=$pecah['tanggal'];
      $keterangan=$pecah['keterangan'];
      $link=$pecah['link'];
      $tipe=$pecah['tipe'];
		}
	} 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" class="dropdown">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/Logo_udinus1.jpg" class="user-image img-responsive"/>
					</li>
				
					
                     <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i>Home</a>
                    </li>
                    <li>
                        <a  href=index.php?halaman=admin><i class="fa fa-dashboard fa-3x"></i>Admin</a>
                    </li>
                     <li>
                        <a  href=index.php?halaman=bidang_kajian><i class="fa fa-dashboard fa-3x"></i>Bidang Kajian</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=topik"><i class="fa fa-dashboard fa-3x"></i> Tabel Topik</a>
                    </li>
                   <li>
                        <a  href="index.php?halaman=publikasi"><i class="fa fa-dashboard fa-3x"></i>Tabel Publikasi</a>
                    </li>
                    <li>
                      <a href="index.php?halaman=dosen"><i class="fa fa-dashboard fa-3x"></i>Tabel dosen</a>
                  </li>
                  <li>
                      <a href="index.php?halaman=mahasiswa"><i class="fa fa-dashboard fa-3x"></i>Tabel mahasiswa</a>
                  </li>
                  <li>
                      <a href="index.php?halaman=alumni"><i class="fa fa-dashboard fa-3x"></i>Tabel Alumni</a>
                  </li>
                    <li>
                        <a  href=index.php?halaman=berita><i class="fa fa-dashboard fa-3x"></i>Informasi</a>
                    </li>
                    <li>
                        <a  href=index.php?halaman=download><i class="fa fa-dashboard fa-3x"></i>Download Jurnal</a>
                    </li>
                     <li>
                        <a  href=index.php?halaman=ebook><i class="fa fa-dashboard fa-3x"></i>Download Ebooks</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=materi"><i class="fa fa-dashboard fa-3x"></i>Materi</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=kegiatan"><i class="fa fa-dashboard fa-3x"></i>Workshop</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=klinik"><i class="fa fa-dashboard fa-3x"></i>Klinik</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=lomba"><i class="fa fa-dashboard fa-3x"></i>Lomba</a>
                    </li>
                    <li>
                        <a  href="logout.php"><i class="fa fa-dashboard fa-3x"></i>Logout</a>
                    </li>
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
        <h5>Form Update Download</h5>
        <form action="proses-update-download.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Judul</label>
              <input type="text" class="form-control" name="judul" value="<?php echo $judul ?>" aria-describedby="emailHelp" placeholder="Judul" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal ?>" aria-describedby="emailHelp" placeholder="Tanggal" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3" value="<?php echo $keterangan ?>"></textarea>
            </div>
           <div class="form-group">
              <label for="exampleFormControlTextarea1">Link</label>
              <input type="file" class="form-control" name="link" value="<?php echo $link ?>" aria-describedby="emailHelp" placeholder="Link" >
           </div>
           <div class="form-group">
              <label for="exampleFormControlTextarea1">Tipe</label>
              <input type="text" class="form-control" name="tipe" value="<?php echo $tipe ?>" aria-describedby="emailHelp" placeholder="Tipe" >
           </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
