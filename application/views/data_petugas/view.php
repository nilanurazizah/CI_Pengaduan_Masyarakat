        <div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>Nama Petugas</th>
			<th>Username</th>
			<th>Password</th>
			<th>Telepon</th>
			<th>Level</th>
			<th colspan="2" class="text-center">Action<span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($model as $data){
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data->nama_petugas; ?></td>
				<td class="align-middle"><?php echo $data->username; ?></td>
				<td class="align-middle"><?php echo $data->password; ?></td>
				<td class="align-middle"><?php echo $data->telepon; ?></td>
				<td class="align-middle"><?php echo $data->level; ?></td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_petugas; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-success btn-form-ubah">Edit<span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
        			<input type="hidden" class="nama-value" value="<?php echo $data->nama_petugas; ?>">
        			<input type="hidden" class="userr-value" value="<?php echo $data->username; ?>">
        			<input type="hidden" class="pass-value" value="<?php echo $data->password; ?>">
        			<input type="hidden" class="telp-value" value="<?php echo $data->telepon; ?>">
        			<input type="hidden" class="level-value" value="<?php echo $data->level; ?>">
				</td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id_petugas; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus">Hapus<span class="glyphicon glyphicon-erase"></span></a>
				</td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>
</div>

</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

</html>