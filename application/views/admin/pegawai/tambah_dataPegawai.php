<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/data_pegawai/tambah_data_aksi') ?>" enctype="multipart/form-data">

			<div class="form-group">
				<label>NIP</label>
				<input type="number" name="nip" class="form-control">
				<?php echo form_error('nip', '<div class="text-small text-danger"> </div>') ?>
			</div>

			<div class="form-group">
				<label>Nama Pegawai</label>
				<input type="text" name="nama_pegawai" class="form-control">
				<?php echo form_error('nama_pegawai', '<div class="text-small text-danger"> </div>') ?>
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?>
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="">--Pilih Jenis Kelamin--</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>') ?>
			</div>

			<div class="form-group">
				<label>Golongan</label>
				<select name="golongan" class="form-control">
					<option value="">--Pilih Golongan--</option>
					<option value="IV/a">IV/a</option>
					<option value="IV/b">IV/b</option>
					<option value="III/d">III/d</option>
					<option value="III/b">III/b</option>
					<option value="III/a">III/a</option>
					<option value="II/d">II/d</option>
					<option value="II/c">II/c</option>
					<option value="II/b">II/b</option>
				</select>
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<select name="jabatan" class="form-control">
					<option value="">--Pilih Jabatan--</option>
					<?php foreach ($jabatan as $j) : ?>
						<option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label>Hak Akses</label>
				<select name="hak_akses" class="form-control">
					<option value="">--Pilih Hak Akses--</option>
					<option value="1">Admin</option>
					<option value="2">User</option>
				</select>
			</div>

			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button>
			<a href="<?php echo base_url('admin/data_pegawai') ?>" class="btn btn-warning">Kembali</a>

		</form>
	</div>
</div>