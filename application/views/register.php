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
    <title></title>

    <style>
        .tulisan{
            text-align: center;
            padding: 5%;
            font-weight: bold;
            font-size: 50px;
            font-family: candara;
        }
    </style>

</head>
<body style="background-color: #AADA94">
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-info">
<img src="<?php echo base_url().'assets/img/unnamed.png' ?>" alt="" style="width: 90px; margin-left: 300px;">
  <p class="navbar-brand" style="font-size: 30px; font-family: candara; margin-left: 20px; color: white;">Pengaduan Masyarakat</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Homepage/beranda'); ?>" style="margin-left: 1010px; font-size: 25px; font-family: candara; color: white;">Beranda</a>
      </li>
    <li class="nav-item">
        <button class="nav-link btn btn-danger" href="<?php echo site_url('Homepage/loginn'); ?>" style="margin-left: 100px; font-size: 25px; font-family: candara; color: white;">
        Login <span class="sr-only">(current)</span></button>
    </li>
    </ul>
  </div>
</nav>

<br><br><br>
    <div class="container">
        <div><h2 class="tulisan">Register</h2>
            <center> <img src="<?php echo base_url().'assets/img/login.png' ?>" style="width: 200px; margin-top: -50px"> </center></div>
        <form action="<?php echo site_url('Homepage/simpan_data') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Nama</label>
            <input type="text" class="form-control" name="namaa" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">NIK</label>
            <input type="number" class="form-control" name="nikk" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Username</label>
            <input type="text" class="form-control" name="userr" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Password</label>
            <input type="password" class="form-control" name="pass" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Telepon</label>
            <input type="text" class="form-control" name="telp" style="width: 500px; margin-left: 330px;">
        </div>

        <!-- <div class="form-group row">
            <label for="" class="col-sm-2" style="margin-left: 30%; font-size: 20px; margin-top: 30px;">Bukti Foto/Video</label>
            <div class="col-sm-6" >
            <input type="file" name="fille" class="form-control-file" style=" margin-top: 30px;">
            </div>
        </div> -->
    <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left: 330px; width: 500px; font-family: candara; font-size: 25px;">
            <a href="<?php echo site_url('Homepage/loginn') ?>"></a> Register</button>
            <p><a style="font-family: candara; font-size: 20px; text-align: center; margin-left: 400px;" href="<?php echo site_url('Homepage/loginn')?>">Sudah Ready akun? Silahkan Login</a></p>
        </div>
        </form>
    </div>



    

    <!-- <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                        <td>Foto</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_masyarakat > 0)
                    {
                        foreach ($masyarakat as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->id_user;?></td>
                        <td><?php echo $datas->Nik;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->telepon; ?></td>
                        <td><img style="width: 100px;" src="<?php echo base_url('assets/filee/foto_profil_user/'.$datas->foto);?>" alt=""></td>
                        <td>
                        <div class="col-12">
                            <?php echo anchor('Homepage/edit/'.$datas->id_user, '<button class="btn btn-success btn-sm edit_data" style="width:100%; margin:auto;">Edit</button>'); ?>
                        </div>
                        <div class="col-12 mt-2">
                            <?php echo anchor('Homepage/hapus/'.$datas->id_user, '<button class="btn btn-danger btn-sm hapus_data" style="width:100%; margin:auto;">Delete</button>'); ?>
                        </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                    <tr>
                        <td colspan="8"><center>Data user kosong!</center></td>
                        </tr>
                    
                        <?php
                    }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div> -->



</body>
</html>