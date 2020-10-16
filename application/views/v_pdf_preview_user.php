

<h1>Data User</h1>
<?php echo "Tanggal : ".date('d-m-Y');?>

<p></p>
<div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table border="1px;" id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIK</td>
                        <td>Nama Masyarakat</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                        <!-- <td>Foto Profil User</td> -->
                        <!-- <td>Status Login</td> -->
                    </tr>
                </thead>
                <tbody>
                <?php  
                    foreach($model_user as $data){
                ?>
                    <tr>
                        <td class="align-middle text-center"><?php echo $data->id_user;?></td>
                        <td class="align-middle text-center"><?php echo $data->Nik;?></td>
                        <td class="align-middle text-center"><?php echo $data->nama_masyarakat;?></td>
                        <td class="align-middle text-center"><?php echo $data->username;?></td>
                        <td class="align-middle text-center"><?php echo $data->password;?></td>
                        <td class="align-middle text-center"><?php echo $data->telepon; ?></td>
                    </tr>
                        <?php 
                        }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>
