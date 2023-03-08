<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card" style="margin-bottom: 120px; width: 50%">
  	<div class="card-header font-weight-bold bg-primary text-white">
  		Data Surat Keluar
  	</div>

  <?php foreach($suratkeluar as $sk) : ?>
  <div class="card-body">
  	<div class="row">
	  	<div>
	  		<table class="table">

	  			<tr>
	  				<td>Nomor Berkas</td>
	  				<td>:</td>
	  				<td><?php echo $sk->no_berkas?></td>
	  			</tr>

	  			<tr>
	  				<td>Alamat Penerima</td>
	  				<td>:</td>
	  				<td><?php echo $sk->alamat_penerima?></td>
	  			</tr>

	  			<tr>
	  				<td>Tanggal Surat</td>
	  				<td>:</td>
	  				<td><?php echo $sk->tanggal_surat?></td>
	  			</tr>

	  			<tr>
	  				<td>Perihal</td>
	  				<td>:</td>
	  				<td><?php echo $sk->perihal?></td>
	  			</tr>

	  			<tr>
	  				<td>Nomor Petunjuk</td>
	  				<td>:</td>
	  				<td><?php echo $sk->no_petunjuk?></td>
	  			</tr>

	  			<tr>
	  				<td>Nomor Paket</td>
	  				<td>:</td>
	  				<td><?php echo $sk->no_paket?></td>
	  			</tr>

	  			<tr>
	  				<td>File</td>
	  				<td>:</td>
	  				<td><img style="width: 200px" src="<?php echo base_url('file/'.$sk->file) ?>"></td>
	  			</tr>
	  		</table>
	  	</div>
  	</div>
  </div>
  <?php endforeach; ?>

</div>
<!-- /.container-fluid -->