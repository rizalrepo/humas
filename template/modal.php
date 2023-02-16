<?php
$pengaduan = [
    '' => '-- Pilih --',
    '1' => 'Belum ada Tindakan',
    '2' => 'Pengaduan ditindak lanjuti',
    '3' => 'Data yang disampaikan tidak Valid',
];

$aspirasi = [
    '' => '-- Pilih --',
    '1' => 'Belum ada Tindakan',
    '2' => 'Aspirasi ditindak lanjuti',
    '3' => 'Data yang disampaikan tidak Valid',
];

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
?>

<div class="modal fade" id="lap_aspirasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Aspirasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/aspirasi/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Bulan</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select name="bulan" class="form-control">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" name="tahun" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Status Pesan</label>
                                <?= form_dropdown('aspirasi', $aspirasi, '', 'class="form-control"') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="cetak" class="btn btn-block bg-purple"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="lap_pengaduan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Pengaduan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/pengaduan/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Bulan</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select name="bulan" class="form-control">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="number" name="tahun" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Status Pesan</label>
                                <?= form_dropdown('pengaduan', $pengaduan, '', 'class="form-control"') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="cetak" class="btn btn-block bg-purple"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="lap_masuk">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Surat Masuk</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/masuk/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Tanggal Terima Surat</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input type="date" class="form-control" name="tgl1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                            <input type="date" class="form-control" name="tgl2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Jenis Surat</label>
                                <select name="id_jenis_surat" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM jenis_surat ORDER BY id_jenis_surat ASC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_jenis_surat'] ?>"><?= $row['nm_jenis_surat'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="cetak" class="btn btn-block bg-purple"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="lap_disposisi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Disposisi Surat Masuk</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/disposisi/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Tanggal Terima Surat</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input type="date" class="form-control" name="tgl1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                            <input type="date" class="form-control" name="tgl2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="cetak" class="btn btn-block bg-purple"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="lap_kegiatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Kegiatan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/kegiatan/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Tanggal Mulai Kegiatan</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input type="date" class="form-control" name="tgl1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                            <input type="date" class="form-control" name="tgl2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Jenis Kegiatan</label>
                                <select name="id_jenis_kegiatan" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM jenis_kegiatan ORDER BY id_jenis_kegiatan ASC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_jenis_kegiatan'] ?>"><?= $row['nm_jenis_kegiatan'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="cetak" class="btn btn-block bg-purple"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>