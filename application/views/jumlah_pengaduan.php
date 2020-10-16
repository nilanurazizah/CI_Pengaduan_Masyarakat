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

/* .tulisan{
    color: inherit;
    font-size: 100px;
    font-family: candara;
} */
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
    background: palegreen;
    color: white;
    font-family: candara;
    min-width: 380px;
    max-width: 400px;
    min-height: 100vh;
}

.sidebar .sidebar-header {
    padding: 10px;
    background: powderblue;
}

.sidebar ul li a {
    padding: 30px;
    font-size: 1.1em;
    display: block;
    font-family: candara;
    font-size: 30px;
}
.rounded-circle{
    width: 30%;
    /* margin-left: 100px; */
}
.text-center{
    font-family: candara;
    font-size: 30px;
}



    </style>
</head>
<body>
<nav class="navbar navbar-light">
      <a class="navbar-brand">Pengaduan Masyarakat</a>
  </nav>
<div class="wrapper">
    <nav class="sidebar">
        <div class="sidebar-header col-md-1 col-md-12">
            <!-- <div class="row"> -->
                <center>
                <!-- <img src="<?php echo base_url('assets/img/person.png') ?>" class="rounded-circle" alt=""> -->
                <p></p>
                <!-- <p class="text-white mt-3" style="text-align: justify; font-size: 30px; margin-top: 10px; margin-left: 100px; font-family: candara;" ><b><?php echo $this->session->userdata('nama_masyarakat');?></b></p> -->
                </center>
            <!-- </div> -->
            <!-- <h5>123456789</h5> -->
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo site_url('homepage/home_user'); ?>" style="font-size: 25px;">Dashboard</a>
            </li>
            <hr>
            <li>
                <a href="<?php echo site_url('Homepage/form'); ?>" style="font-size: 25px;">Form Pengaduan</a>
            </li>
            <hr>
            <li>
                <a href="#" style="font-size: 25px;">Jumlah Pengaduan</a>
            </li>
            <hr>
            <li>
                <a href="<?php echo site_url('homepage/logout'); ?>" style="font-size: 25px;">Logout</a>
            </li>
        </ul>
    </nav>

  



    <div class="card-body" style="margin-top: -10px; background-color: #F0F8FF;">

    <center>
        <h1 class="display-5" style="margin-top: -1px;">Jumlah Pengaduan Anda</h1>
    </center>
    <hr>
	<a type="button" class="btn btn-info btn-lg" href="<?php echo site_url('homepage/form')?>">Tambah Data</a>

    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <!-- <td>NIK</td> -->
                        <td>Nama</td>
                        <td>Tanggal Pengaduan</td>
                        <td>Isi Pengaduan</td>
                        <td>Bukti Foto/Video</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_pengaduan > 0)
                    {
                        foreach ($pengaduan as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->id_pengaduan;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->tgl_pengaduan;?></td>
                        <td><?php echo $datas->isi_pengaduan;?></td>
                        <td><img style="width: 100px;" src="<?php echo base_url('assets/filee/foto_pengaduan/'.$datas->foto);?>" alt=""></td>
                        <td>0</td>
                        <td>
                            <div class="col-12">
                                <?php echo anchor('Homepage/edit_pengaduan/'.$datas->id_pengaduan, '<button class="btn btn-success btn-sm edit_data" style="width:100%; margin:auto;">Edit</button>'); ?>                            </div>
                            <div class="col-12 mt-2">
                                <?php echo anchor('Homepage/hapuss/'.$datas->id_pengaduan, '<button class="btn btn-danger btn-sm hapus_data" style="width:100%; margin:auto;">Delete</button>'); ?>
                            </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                    <tr>
                        <td colspan="8"><center>Data pengaduan kosong!</center></td>
                        </tr>
                    
                        <?php
                    }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>



</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

</html>