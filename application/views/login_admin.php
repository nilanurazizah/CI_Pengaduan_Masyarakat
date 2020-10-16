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
    <title>Login</title>

    <style>
        .img-fluid{
            position: absolute;
            width: 90%;
            /* height: 400px; */
            /* left: 400px;
            top: 300px; */
        }
        .card{
          border-radius: 0;
          border: 0;
        }
        .card, .card-header{
          background: transparent;
          border-bottom: 1px ;
        }
        /* .form-control{
          border-radius: 1px;
          width: 100%;
        } */
        .form-control:focus{
            box-shadow: none;
        } 
        .mt-12{
          margin-top: 350px;
        }
        h4{
          font-size: 45px;
          font-family: candara;
          text-align: center;
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
        <a class="nav-link" href="<?php echo site_url('Homepage/beranda'); ?>" style="margin-left: 900px; font-size: 30px; font-family: candara; color: white;">Beranda</a>
      </li>
    <li class="nav-item">
        <button class="nav-link btn btn-danger" href="<?php echo site_url('Homepage/loginn'); ?>" style="margin-left: 50px; font-size: 30px; font-family: candara; color: white;">
        Login <span class="sr-only">(current)</span></button>
    </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row justify-content-md-center mt-12">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <img src="<?php echo base_url('assets/img/login.png') ?>" class="img-fluid">
                  </div>
                  <div class="col-sm-6 p-0">
                    <div class="card">
                        <div class="card-header">
                            <h4>Silahkan Login</h4>
                        </div>
                        <div class="card-body">
                          <form action="<?php echo site_url('Homepage/aksi_login_admin')?>" method="post">
                              <div class="form-group">
                                <!-- <label for="">Username</label> -->
                                <input type="text" class="form-control" name="username" placeholder="Username...." style="position: absolute; width: 500px; height: 50px;">
                              </div>
                              <div class="form-group">
                                <!-- <label for="">Password</label> -->
                                <input type="password" class="form-control" name="password" placeholder="Password...." style="position: absolute; width: 500px; height: 50px; top: 200px;">
                              </div>
                              <div class="form-group">
                                  <button type="submit"  value="masuk" class="btn btn-success" style="margin-top: 150px; width: 500px; font-family: candara; font-size: 30px;">Masuk</button>
                              </div>
                              <!-- <div class="form-group">
                                  <p style="font-family: candara; font-size: 20px; margin-left: 70px; text-align: center;">Login Sebagai <a href="<?php echo site_url('Homepage/login_admin'); ?>">Admin</a>/<a href="#">Petugas</a></p>
                              </div>
                            <div class="form-group">
                              <p style="font-family: candara; font-size: 20px; text-align: center;">Belum Memiliki Akun? <a href="<?php echo site_url('Homepage/regis'); ?>">Daftar Sekarang</a></p>
                            </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>

</body>
</html>