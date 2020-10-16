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
      /* body{
        min-height: 75rem;
        padding-top: 4.5rem;
      } */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <img src="<?php echo base_url().'assets/img/b2ap3_large_pengaduan.png' ?>" alt="" style="width: 90px; margin-left: 300px;">
  <p class="navbar-brand" style="font-size: 30px; font-family: candara; margin-left: 20px; color: black;">Pengaduan Masyarakat</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="#" style="margin-left: 910px; font-size: 30px; font-family: candara; color: white;">Beranda</a>
      </li>
    <li class="nav-item">
        <a class="nav-link btn btn-danger" href="<?php echo site_url('Homepage/loginn'); ?>" style="margin-left: 50px; font-size: 30px; font-family: candara; color: white;">
        Login <span class="sr-only">(current)</span></a>
    </li>
    </ul>
  </div>
</nav>


<img src="<?php echo base_url().'assets/img/banner1-3.jpg' ?>" style="width:100%">
        <center>
        <h1 style="margin-top: -800px; font-family: candal;">LAYANAN PENGADUAN MASYARAKAT ONLINE</h1>
        <br>
        <a type="button" class="btn btn-success" href="<?php echo site_url('Homepage/loginn'); ?>" style="font-size: 30px; font-family: candal;">Adukan Sekarang</a>
</center>
</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>


</html>