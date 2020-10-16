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
                <!-- <p class="text-white mt-3" style="text-align: justify; font-size: 30px; margin-top: 10px; margin-left: 100px; font-family: candara;" ><b><?php echo $this->session->userdata('nama_petugas');?></b></p> -->
                </center>
            <!-- </div> -->
            <!-- <h5>123456789</h5> -->
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo site_url('homepage/home_admin'); ?>" style="font-size: 25px;">Dashboard</a>
            </li>
            <hr>
            <li>
                <a href="<?php echo site_url('homepage/dataa_user'); ?>" style="font-size: 25px;">Data User</a>
            </li>
            <hr>
            <li>
                <a href="#" style="font-size: 25px;">Data Petugas</a>
            </li>
            <hr>
            <li>
                <a href="<?php echo site_url('homepage/logout'); ?>" style="font-size: 25px;">Logout</a>
            </li>
        </ul>
    </nav>

  



    <div class="card-body" style="margin-top: -10px; background-color: #F0F8FF;">

    <center>
        <h1 class="display-5" style="margin-top: -1px;">Data Petugas</h1>
    </center>
    <hr>

    <a href="<?php echo site_url('Homepage/form_petugas') ?>" class="btn btn-success">Tambah Petugas</a>

    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <!-- <td>NIK</td> -->
                        <td>Nama Petugas</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Telepon</td>
                        <td>Level</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_petugas > 0)
                    {
                        foreach ($petugas as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->id_petugas;?></td>
                        <td><?php echo $datas->nama_petugas;?></td>
                        <td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->telp;?></td>
                        <td><?php echo $datas->level;?></td>
                        <!-- <td><img style="width: 100px;" src="<?php echo base_url('assets/filee/foto_pengaduan/'.$datas->foto);?>" alt=""></td> -->
                        <td>
                            <div class="col-12">
                                <?php echo anchor('Homepage/edit_petugas/'.$datas->id_petugas, '<button class="btn btn-success btn-sm edit_data" style="width:100%; margin:auto;">Edit</button>'); ?></div>
                            </div>
                            <div class="col-12 mt-2">
                                <?php echo anchor('Homepage/hapus_data_petugas/'.$datas->id_petugas, '<button class="btn btn-danger btn-sm hapus_data" style="width:100%; margin:auto;">Delete</button>'); ?>
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

<a href="<?php echo site_url('Homepage/cetak_pdf_petugas');?>" class="btn btn-success">Download PDF</a>
<a href="<?php echo site_url('Homepage/cetak_xls_petugas');?>" class="btn btn-warning">Download Excel</a>

</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

</html>