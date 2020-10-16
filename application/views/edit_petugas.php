<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url() . 'assets/css/bootsrap.min.css' ?>" rel="stylesheet">
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
                <!-- <center>
                <img src="<?php echo base_url('assets/img/person.png') ?>" class="rounded-circle" alt="">
                <p></p>
                <p class="text-white mt-3" style="text-align: justify; font-size: 30px; margin-top: 10px; margin-left: 100px; font-family: candara;" ><b><?php echo $this->session->userdata('nama');?></b></p>
                </center> -->
            <!-- </div> -->
            <!-- <h5>123456789</h5> -->
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo site_url('homepage/home_admin'); ?>" style="font-size: 25px;">Dashboard</a>
            </li>
            <hr>
            <li>
                <a href="#" style="font-size: 25px;">Data Admin</a>
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
        <div id="card-content">
            <center>
                <h3>Edit Data User</h3>
            </center>
        <hr>

            <?php 
                foreach ($petugas as $u) 
                { 
            ?>
                <form action="<?php echo base_url() . 'Homepage/update_petugas'; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_petugas" value="<?php echo $u->id_petugas ?>">
                <br>
        <div class="container">
            <!-- <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">NIK</label>
                        <div class="col-sm-6">
                            <input type="number" name="nikk" value="<?php echo $u->Nik ?>" class="form-control" style="margin-top: -5px;">
                        </div>
                </div> -->
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" name="namaa" value="<?php echo $u->nama_petugas ?>" class="form-control" style="margin-top: -5px;">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Username</label>
                        <div class="col-sm-6">
                            <input type="text" name="usernamee" value="<?php echo $u->username ?>" class="form-control" style="margin-top: -5px;">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="passwordd" value="<?php echo $u->password ?>" class="form-control" style="margin-top: -5px;">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Telepon</label>
                        <div class="col-sm-6">
                            <input type="number" name="telep" value="<?php echo $u->telp ?>" class="form-control" style="margin-top: -5px;">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Level</label>
                    <div class="col-sm-6" >
                        <select name="levell" id="" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>

                        <td><input class="btn btn-success" style="margin-left: 770px;" type="submit" value="Simpan"></td>
                    </div>
                </form>
            <?php 
                } 
            ?>
        </div>
    </div>
</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>">
</script>

</html>