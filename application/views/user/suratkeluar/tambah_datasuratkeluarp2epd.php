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
        <form method="POST" action="<?php echo base_url('admin/data_suratkeluarp2epd/tambah_data_aksi') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nomor Berkas</label>
                <input type="number" name="no_berkas" class="form-control">
                <?php echo form_error('no_berkas', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Alamat Penerima</label>
                <input type="text" name="alamat_penerima" class="form-control">
                <?php echo form_error('alamat_penerima', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Tanggal Surat</label>
                <input type="date" name="tanggal_surat" class="form-control">
                <?php echo form_error('tanggal_surat', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Perihal</label>
                <input type="text" name="perihal" class="form-control">
                <?php echo form_error('perihal', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Nomor Petunjuk</label>
                <input type="text" name="no_petunjuk" class="form-control">
                <?php echo form_error('no_petunjuk', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="form-group">
                <label>Nomor Paket</label>
                <input type="text" name="no_paket" class="form-control">
                <?php echo form_error('no_paket', '<div class="text-small text-danger"> </div>') ?>
            </div>

            <div class="mb-3">
                <label>file</label>
                <input type="file" name="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a href="<?php echo base_url('admin/data_suratkeluarp2epd') ?>" class="btn btn-warning">Kembali</a>

        </form>
    </div>
</div>