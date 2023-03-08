<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="card mx-auto" style="width: 35%">
		<div class="card-header bg-primary text-white text-center">
			Filter Laporan Surat Bidang P2EPD
		</div>

    <form method="POST" action="<?php echo base_url('admin/laporan_suratp2epd/filter')?>">

    <div class="card-body">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Awal</label>
                <input type="date" name="tanggalawal">
            <div class="col-sm-9">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Akhir</label>
                <input type="date" name="tanggalakhir">
            <div class="col-sm-9">
            </div>
        </div>
    </div>

    

    <button style="width: 100%" type="submit" class="btn btn-primary"><i class="fas fa-print"></i>Cetak Laporan Surat</button>

    </form>
</div>
<!-- /.container-fluid -->