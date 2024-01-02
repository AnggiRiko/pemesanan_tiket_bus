<!-- Content -->
<div id="content-wrapper" class="d-flex flex-column mt-4 text-center">
    <div id="content">
        <div class="container-fluid">
            <h5 class="mt-4">Pemesanan Tiket Bus</h5>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center text-white">Formulir Pemesanan Tiket Bus</div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <?php echo form_open_multipart('pesan/tambah_data') ?>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="no_identitas">Nomor Identitas</label>
                        <input type="number" class="form-control" id="no_identitas" name="no_identitas">
                        <?php echo form_error('no_identitas', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="number" class="form-control" id="nomor_hp" name="nomor_hp">
                        <?php echo form_error('nomor_hp', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Kelas Penumpang</label>
                        <select class="form-select" aria-label="Default select example" name="kelas_penumpang" id="kelas_penumpang">
                            <option value="" selected> - Pilih Kelas Penumpang - </option>
                            <?php
                            foreach ($kelas_bus as $data) { ?>
                                <option value="<?= $data->kelas_penumpang ?>"> <?= $data->kelas_penumpang; ?> </option>

                            <?php }
                            ?>
                        </select>
                        <?php echo form_error('kelas_penumpang', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="jadwal">Jadwal Keberangkatan</label>
                        <input type="date" class="form-control" id="jadwal" name="jadwal">
                        <?php echo form_error('jadwal', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_penumpang">Jumlah Penumpang</label>
                        <input type="number" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_penumpang_lansia">Jadwal Penumpang Lansia (Usia 60 tahun keatas)</label>
                        <input type="number" class="form-control" id="jumlah_penumpang_lansia" name="jumlah_penumpang_lansia">
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Total Bayar</label>
                        <input type="text" class="form-control" id="total" name="total" readonly>
                        <?php echo form_error('total', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-success" id="hitung_total">Hitung Total Bayar</button>
                        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                        <button type="reset" class="btn btn-danger">Cansel</button>
                    </div>

                    <?php echo form_close() ?>
                </div>
                <div class="card-footer bg-success">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Content -->