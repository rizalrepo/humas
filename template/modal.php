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