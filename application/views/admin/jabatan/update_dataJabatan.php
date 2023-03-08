<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">
		<?php foreach ($jabatan as $j): ?>
		<form method="POST" action="<?php echo base_url('admin/data_jabatan/update_data_aksi')?>">
			
			<div class="form-group">
				<label>Nama Jabatan</label>
				<input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $j->id_jabatan?>">
				<input type="text" name="nama_jabatan" class="form-control" value="<?php echo $j->nama_jabatan?>">
				<?php echo form_error('nama_jabatan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<a href="<?php echo base_url('admin/data_jabatan')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>