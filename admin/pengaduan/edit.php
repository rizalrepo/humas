<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'pengaduan';
include_once '../../template/sidebar.php';

$id = $_GET['id'];
$query = $con->query(" SELECT * FROM pengaduan WHERE id_pengaduan ='$id'");
$row = $query->fetch_array();

$sts = [
    '' => '-- Pilih --',
    '1' => 'Belum ada Tindakan',
    '2' => 'Pengaduan ditindak lanjuti',
    '3' => 'Data yang disampaikan tidak Valid',
];

if ($row['status'] == 2) {
    $view = '';
} else {
    $view = 'hidden';
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fas fa-comment-dots ml-1 mr-1"></i> Tindak Lanjut Pengaduan</h4>
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
                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['nm_lengkap'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $row['no_hp'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Waktu Pengiriman</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= tgl($row['tanggal']) ?> (<?= $row['jam'] ?>)" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pesan Pengaduan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" readonly><?= $row['pesan'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status Pesan</label>
                                    <div class="col-sm-10">
                                        <?= form_dropdown('status', $sts, $row['status'], 'class="form-control" id="sts" required') ?>
                                    </div>
                                </div>

                                <!-- <div class="form-group row"> -->
                                <div class="form-group row" id="tindakan" <?= $view ?>>
                                    <label class="col-sm-2 col-form-label">Tindak Lanjut</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="tindakan"><?= $row['tindakan'] ?></textarea>
                                    </div>
                                </div>

                                <!-- <div class="form-group row"> -->
                                <div class="form-group row" id="pic" <?= $view ?>>
                                    <label class="col-sm-2 col-form-label">PIC Unit Kerja</label>
                                    <div class="col-sm-10">
                                        <select name="id_unit_kerja" class="form-control select2" style="width: 100%;">
                                            <option value="">-- Pilih --</option>
                                            <?php
                                            $q = $con->query("SELECT * FROM unit_kerja ORDER BY id_unit_kerja ASC");
                                            while ($d = $q->fetch_array()) {
                                                if ($d['id_unit_kerja'] == $row['id_unit_kerja']) {
                                            ?>
                                                    <option value="<?= $d['id_unit_kerja']; ?>" selected="<?= $d['id_unit_kerja']; ?>"><?= $d['nm_unit_kerja'] ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?= $d['id_unit_kerja'] ?>"><?= $d['nm_unit_kerja'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
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

<script type='text/javascript'>
    $(window).load(function() {
        $("#sts").change(function() {
            console.log($("#sts option:selected").val());
            if ($("#sts option:selected").val() == '2') {
                $('#tindakan').prop('hidden', false);
                $('#pic').prop('hidden', false);
            } else {
                $('#tindakan').prop('hidden', 'true');
                $('#pic').prop('hidden', 'true');
            }
        });
    });
</script>

<?php
if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $tindakan = $_POST['tindakan'];
    $id_unit_kerja = $_POST['id_unit_kerja'];

    $update = $con->query("UPDATE pengaduan SET 
        status = '$status',
        tindakan = '$tindakan',
        id_unit_kerja = '$id_unit_kerja'
        WHERE id_pengaduan = '$id'
    ");

    if ($update) {
        $_SESSION['pesan'] = "Data Berhasil di Update";
        echo "<meta http-equiv='refresh' content='0; url=index'>";
    } else {
        echo "Data anda gagal diubah. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=edit?id=$id'>";
    }
}



?>