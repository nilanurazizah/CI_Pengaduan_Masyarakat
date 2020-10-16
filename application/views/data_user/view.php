
        <div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>NIK</th>
			<th>Nama Petugas</th>
			<th>Username</th>
			<th>Password</th>
			<th>Telepon</th>
			<!-- <th>Level</th> -->
			<th colspan="2" class="text-center">Action<span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($model_user as $data){
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data->Nik; ?></td>
				<td class="align-middle"><?php echo $data->nama_masyarakat; ?></td>
				<td class="align-middle"><?php echo $data->username; ?></td>
				<td class="align-middle"><?php echo $data->password; ?></td>
				<td class="align-middle"><?php echo $data->telepon; ?></td>
				<!-- <td class="align-middle"><?php echo $data->level; ?></td> -->
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_user; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-success btn-form-ubah">Edit<span class="glyphicon glyphicon-pencil"></span></a>

					<!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
					<input type="hidden" class="nik-value" value="<?php echo $data->Nik; ?>">
        			<input type="hidden" class="nama-value" value="<?php echo $data->nama_masyarakat; ?>">
        			<input type="hidden" class="user-value" value="<?php echo $data->username; ?>">
        			<input type="hidden" class="pas-value" value="<?php echo $data->password; ?>">
        			<input type="hidden" class="telp-value" value="<?php echo $data->telepon; ?>">
        			<!-- <input type="hidden" class="level-value" value="<?php echo $data->level; ?>"> -->
				</td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_user; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus">Hapus<span class="glyphicon glyphicon-erase"></span></a>
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