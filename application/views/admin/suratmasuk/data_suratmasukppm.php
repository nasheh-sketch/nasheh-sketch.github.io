<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/data_suratmasukppm/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Surat Masuk</a>
    <?php echo $this->session->flashdata('pesan') ?>
</div>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
							<th class="text-center">No</th>
							<th class="text-center">Nomor Berkas</th>
							<th class="text-center">Alamat Pengirim</th>
							<th class="text-center">Tanggal Surat</th>
							<th class="text-center">Nomor Surat</th>
							<th class="text-center">Perihal</th>
							<th class="text-center">Nomor Petunjuk</th>
							<th class="text-center">Nomor Paket</th>
							<th class="text-center">File</th>
							<th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($suratmasuk as $sm) : ?>
                            <tr>
								<td class="text-center"><?php echo $no++?></td>
								<td class="text-center"><?php echo $sm->no_berkas?></td>
								<td class="text-center"><?php echo $sm->alamat_pengirim?></td>
								<td class="text-center"><?php echo $sm->tanggal_surat?></td>
								<td class="text-center"><?php echo $sm->no_surat?></td>
								<td class="text-center"><?php echo $sm->perihal?></td>
								<td class="text-center"><?php echo $sm->no_petunjuk?></td>
								<td class="text-center"><?php echo $sm->no_paket?></td>
								<td>
								<center>
									<a class="btn btn-sm btn-primary" href="<?php echo site_url('admin/data_suratmasukppm/download/' . $sm->id) ?>"><i class="fas fa-download"></i></a>
								</center>
								</td>
								<td>
									<center>
										<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/data_suratmasukppm/detail_data/' . $sm->id) ?>"><i class="fas fa-eye"></i></a>
										<a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_suratmasukppm/update_data/' . $sm->id) ?>"><i class="fas fa-edit"></i></a>
										<a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_suratmasukppm/delete_data/' . $sm->id) ?>"><i class="fas fa-trash"></i></a>
									</center>
								</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->