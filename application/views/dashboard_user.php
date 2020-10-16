<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url() . 'assets/css/bootsrap.min.css' ?>" rel="stylesheet">
    <title><?php echo $title;?></title>
    <style>

.tulisan{
    /* color: inherit; */
    font-size: 30px;
    font-family: candara;
}
/* .text-center{
    font-family: candara;
    font-size: 35px;
} */
.navbar, .navbar-light{
    background: #14b1ab;
}
.navbar-brand{
    font-size: 45px;
    margin-left: 40%;
    font-family: candara;
}
.wrapper {
    display: flex;
    width: 100%;
    /* align-items: stretch; */
}

.sidebar {
    background: #d3dbff;
    color: #fff;
    font-family: candara;
    min-width: 380px;
    /* max-width: 400px; */
    min-height: 100vh;
}

.sidebar .sidebar-header {
    padding: 50px;
    background: #8fc0a9;
}

.sidebar ul li a {
    padding: 30px;
    font-size: 1.1em;
    display: block;
    font-family: candara;
    font-size: 30px;
}

body{
    background: skyblue;
}
.rounded-circle{
    width: 3%;
    margin-left: 480px;
}



    </style>
</head>
<body>

    <!-- NAVBAR -->
<nav class="navbar navbar-light">
      <a class="navbar-brand">Pengaduan Masyarakat</a>
      <!-- <p class="text-white mt-3" style="text-align: justify; font-size: 30px; margin-top: 10px; margin-left: 270px; font-family: candara;" ><b><?php echo $this->session->userdata('nama_masyarakat');?></b></p> -->
      <a href="#" class="btn btn-danger nav-link" style="font-size: 25px; font-family: candara;" data-toggle="modal" data-target="#logoutModal">Logout</a>
  </nav>

  <div class="container container-fluid">
  <center>
    <video width="70%" height="50%" style="margin-top: 20px;" controls autoplay>
        <source src="<?php echo base_url('assets/video/ILM.mp4') ?>" type="video/mp4">
    </video>
    </center>
    </div>

  <!-- CARD MENUNYA -->
<div class="card" style="width: 20rem; margin-top: 5%; margin-left: 20%; border-radius: 20px;">
      <img src="<?php echo base_url().'assets/img/kotak.jpg' ?>" class="card-img-top" style="border-radius: 20px;">
        <div class="card-body">
          <a style="text-align: center; font-size: 33px; font-family: candara;"" class="card-title" href="<?php echo site_url('homepage/jml_pengaduan'); ?>">Jumlah Pengaduan</a>
        <p class="card-text" style="font-size: 20px; font-family: candara;">Lihat Jumlah Pengaduanmu</p>
    </div>
</div>

<div class="card" style="width: 20rem; margin-top: -330px; margin-left: 65%; border-radius: 20px;">
    <center>
      <img src="<?php echo base_url().'assets/img/notee.png' ?>" class="card-img-top" style="width: 65%; border-radius: 20px;">
      </center>
        <div class="card-body">
          <a style="text-align: center; font-size: 33px; font-family: candara;" class="card-title" href="<?php echo site_url('homepage/form'); ?>">Form Pengaduan</a>
        <p class="card-text" style="font-size: 20px; font-family: candara;">Adukan Sekarang</p>
    </div>
</div>



</div>

<!-- LOGOUT NYA -->
<div class="modal fade" id="logoutModal" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">Pilih Logout, jika sudah bersiap untuk keluar.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">batal</button>
					<a class="btn btn-primary" href="<?php echo site_url('Homepage/logout');?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
</html>