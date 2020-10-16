
<h1>Data Petugas</h1>
<?php echo "Tanggal : ".date('d-m-Y');?>

<p></p>
<div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table border="1px;" id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Petugas</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                        <td>Level</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    foreach($model as $data){
                ?>
                    <tr>
                        <td class="align-middle text-center"><?php echo $data->id_petugas; ?></td>
                        <td class="align-middle"><?php echo $data->nama_petugas; ?></td>
                        <td class="align-middle"><?php echo $data->username; ?></td>
                        <td class="align-middle"><?php echo $data->password; ?></td>
                        <td class="align-middle"><?php echo $data->telepon; ?></td>
                        <td class="align-middle"><?php echo $data->level; ?></td>
                    </tr>
                        <?php 
                        }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>