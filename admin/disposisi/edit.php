<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'disposisi';
include_once '../../template/sidebar.php';

$id = $_GET['id'];
$query = $con->query("SELECT * FROM surat_masuk  a JOIN jenis_surat b ON a.id_jenis_surat = b.id_jenis_surat WHERE id_surat_masuk ='$id'");
$row = $query->fetch_array();

$dpp = $con->query("SELECT * FROM disposisi a JOIN surat_masuk b ON a.id_surat_masuk = b.id_surat_masuk WHERE a.id_surat_masuk ='$id'")->fetch_array();

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fas fa-mail-bulk ml-1 mr-1"></i> Update Data Disposisi Surat Masuk</h4>
                </div><!-- /.col -->
                <div class="col-sm-6 float-right">
                    <a href="#" onClick="history.go(-1);" class="btn btn-xs bg-dark float-right"><i class="fa fa-arrow-left"> Kembali</i></a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- left column -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-lightblue card-outline">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body" style="background-color: white;">
                            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['no_surat'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" value="<?= $row['tgl_surat'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Perihal</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['perihal'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Asal Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['pengirim'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['nm_jenis_surat'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Diterima</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= tgl($row['tgl_terima']) ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bukti Diterima</label>
                                    <div class="col-sm-10">
                                        <a href="<?= base_url('file-bukti/masuk/' . $row['bukti']) ?>" target="_blank" class="btn btn-sm btn-block btn-primary"><i class="fas fa-camera mr-1"></i> Lihat Bukti</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tujuan Disposisi</label>
                                    <div class="col-sm-10">
                                        <?php if (!$dpp['id_surat_masuk']) { ?>
                                            <select name="id_unit_kerja[]" class="form-control" id="tagUnit" multiple style="width: 100%;">
                                                <option value="">-- Pilih --</option>
                                                <?php $data = $con->query("SELECT * FROM unit_kerja ORDER BY id_unit_kerja ASC"); ?>
                                                <?php foreach ($data as $row) : ?>
                                                    <option value="<?= $row['id_unit_kerja'] ?>"><?= $row['nm_unit_kerja'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        <?php } else { ?>
                                            <select name="id_unit_kerja[]" multiple class="form-control" id="tagUnit" style="width: 100%;">
                                                <?php $data = $con->query("SELECT * FROM disposisi a JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE a.id_surat_masuk = '$id' "); ?>
                                                <?php foreach ($data as $row2) : ?>
                                                    <option selected="<?= $row['id_unit_kerja'] ?>" value=" <?= $row2['id_unit_kerja'] ?>"><?= $row2['nm_unit_kerja'] ?></option>
                                                <?php endforeach ?>
                                                <?php $data2 = $con->query("SELECT * FROM unit_kerja ORDER BY id_unit_kerja ASC"); ?>
                                                <?php foreach ($data2 as $row2) : ?>
                                                    <option value="<?= $row2['id_unit_kerja'] ?>"><?= $row2['nm_unit_kerja'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit" class="btn btn-sm bg-cyan float-right"><i class="fa fa-save"> Update</i></button>
                                        <button type="reset" class="btn btn-sm btn-danger float-right mr-1"><i class="fa fa-times-circle"> Batal</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../../template/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#tagUnit').select2();
    })
</script>

<?php
if (isset($_POST['submit'])) {

    if (!$dpp['id_surat_masuk']) {
        foreach ($_POST['id_unit_kerja'] as $Value) {
            $tambah = $con->query("INSERT INTO disposisi VALUES (
                default,
                '$id', 
                '$Value'
            )");
        }
    } else {
        $query = $con->query("DELETE FROM disposisi WHERE id_surat_masuk = '$id' ");
        foreach ($_POST['id_unit_kerja'] as $Value) {
            $tambah = $con->query("INSERT INTO disposisi VALUES (
                default,
                '$id', 
                '$Value'
            )");
        }
    }

    $_SESSION['pesan'] = "Data Berhasil di Update";
    echo "<meta http-equiv='refresh' content='0; url=index'>";
}


?>