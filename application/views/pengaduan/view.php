
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>Nama Masyarakat</th>
			<th>Tanggal Pengaduan</th>
			<th>Isi Pengaduan</th>
			<th>Bukti Foto/Video</th>
			<!-- <th></th> -->
			<th colspan="2" class="text-center">Action<span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($model_pengaduan as $data){
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data->nama; ?></td>
				<td class="align-middle"><?php echo $data->tgl_pengaduan; ?></td>
				<td class="align-middle"><?php echo $data->isi_pengaduan; ?></td>
				<td class="align-middle"><img style="width: 100px;" src="<?php echo base_url('assets/filee/foto_pengaduan/'.$data->foto);?>" alt=""></td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_pengaduan; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-success btn-form-ubah">Edit<span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
        			<input type="hidden" class="nama-value" value="<?php echo $data->nama; ?>">
        			<input type="hidden" class="tgl-value" value="<?php echo $data->tgl_pengaduan; ?>">
        			<input type="hidden" class="isi-value" value="<?php echo $data->isi_pengaduan; ?>">
        			<input type="hidden" class="bukti-value" value="<?php echo $data->foto; ?>">
        			<!-- <input type="hidden" class="level-value" value="<?php echo $data->level; ?>"> -->
				</td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_pengaduan; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus">Hapus<span class="glyphicon glyphicon-erase"></span></a>
				</td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>
</div>

<!-- <a href="<?php echo site_url('Homepage/cetak_pdf_petugas');?>" class="btn btn-success">Download PDF</a>
<a href="<?php echo site_url('Homepage/cetak_xls_petugas');?>" class="btn btn-warning">Download Excel</a> -->

</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

</html>