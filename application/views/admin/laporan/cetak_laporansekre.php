<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
			line-height: 1;
		}
	</style>
</head>
<body>
<center>
     <table>
           <tr>
                 <td> <img src="<?= base_url('assets/assets/bappedalitbang.png') ?>" width="100px"> </td>
                 <td>
					<center>
						<font size="4">PEMERINTAH KABUPATEN TABALONG</font><br>
						<font size="5">BADAN PERENCANAAN PEMBANGUNAN DAERAH,</font><br>
						<font size="5">PENELITIAN DAN PENGEMBANGAN</font><br>
						<font size="2">Jalan Penghulu Rasyid No.4 Tanjung Kode Pos 71513</font><br>
						<font size="2">Telp.(0526) 2021666 / Fax.(0526) 2021679 Email: bappeda@kabupatentabalong.go.id</font><br>
						<font size="2">Website: www.kabupatentabalong.go.id</font><br>
					</center>				 	
                 </td>
            </tr>
     </table >
	 <hr class="border border-dark border-3 opacity-75" width="75%">
	 </center>

	<center>
	<h4>Surat Masuk</h4>
	</center>

	<table class="table table-bordered table-triped">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Nomor Berkas</th>
			<th class="text-center">Alamat Pengirim</th>
			<th class="text-center">Tanggal Surat</th>
			<th class="text-center">Nomor Surat</th>
			<th class="text-center">Perihal</th>
			<th class="text-center">Nomor Petunjuk</th>
			<th class="text-center">Nomor Paket</th>
		</tr>
		
		<?php $no = 1;
		foreach ($suratmasuk as $sm) : ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $sm->no_berkas ?></td>
				<td class="text-center"><?php echo $sm->alamat_pengirim ?></td>
				<td class="text-center"><?php echo $sm->tanggal_surat ?></td>
				<td class="text-center"><?php echo $sm->no_surat ?></td>
				<td class="text-center"><?php echo $sm->perihal ?></td>
				<td class="text-center"><?php echo $sm->no_petunjuk ?></td>
				<td class="text-center"><?php echo $sm->no_paket ?></td>
			</tr>
		<?php endforeach ;?>
	</table>

	<center>
	<h4>Surat Keluar</h4>
	</center>

	<table class="table table-bordered">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Nomor Berkas</th>
			<th class="text-center">Alamat Penerima</th>
			<th class="text-center">Tanggal Surat</th>
			<th class="text-center">Perihal</th>
			<th class="text-center">Nomor Petunjuk</th>
			<th class="text-center">Nomor Paket</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($suratkeluar as $sk) : ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $sk->no_berkas ?></td>
				<td class="text-center"><?php echo $sk->alamat_penerima ?></td>
				<td class="text-center"><?php echo $sk->tanggal_surat ?></td>
				<td class="text-center"><?php echo $sk->perihal ?></td>
				<td class="text-center"><?php echo $sk->no_petunjuk ?></td>
				<td class="text-center"><?php echo $sk->no_paket ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>
