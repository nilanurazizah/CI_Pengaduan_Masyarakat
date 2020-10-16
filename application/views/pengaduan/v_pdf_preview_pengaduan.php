<h1>Data Aduan</h1>
<?php echo "Tanggal : ".date('d-m-Y');?>

<p></p>
<div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table border="1px;" id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                    <td class="text-center">NO</td>
                    <td>Nama Masyarakat</td>
                    <td>Tanggal Pengaduan</td>
                    <td>Isi Pengaduan</td>
                    <td>Bukti Foto/Video</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    foreach($model_pengaduan as $data){
                ?>
                    <tr>
                        <td class="align-middle text-center"><?php echo $data->id_pengaduan;?></td>
                        <td class="align-middle text-center"><?php echo $data->nama;?></td>
                        <td class="align-middle text-center"><?php echo $data->tgl_pengaduan;?></td>
                        <td class="align-middle text-center"><?php echo $data->isi_pengaduan;?></td>
                        <td class="align-middle"><img style="width: 100px;" src="<?php echo base_url('assets/filee/foto_pengaduan/'.$data->foto);?>" alt=""></td>
                    </tr>
                        <?php 
                        }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>