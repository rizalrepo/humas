<?php
require '../app/config.php';
include_once '../template/header.php';
$page = 'dashboard';
include_once '../template/sidebar.php';

$a = $con->query("SELECT COUNT(*) AS total FROM aspirasi")->fetch_array();
$a2 = $con->query("SELECT COUNT(*) AS total FROM aspirasi WHERE status = 0")->fetch_array();
$b = $con->query("SELECT COUNT(*) AS total FROM pengaduan")->fetch_array();
$b2 = $con->query("SELECT COUNT(*) AS total FROM pengaduan WHERE status = 0")->fetch_array();
$c = $con->query("SELECT COUNT(*) AS total FROM surat_masuk")->fetch_array();
$d = $con->query("SELECT COUNT(*) AS total FROM disposisi")->fetch_array();
$e = $con->query("SELECT COUNT(*) AS total FROM kegiatan")->fetch_array();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box mb-12 bg-lightblue">
                        <span class="info-box-icon"><i class="fas fa-comment-alt"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-1">Data Aspirasi</h6>
                            <span><?= $a['total'] ?> Total Data | <span class="badge badge-warning"><?= $a2['total'] ?> Data belum ditindak lanjuti</span></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-12 bg-lightblue">
                        <span class="info-box-icon"><i class="fas fa-comment-dots"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-1">Data Pengaduan</h6>
                            <span><?= $b['total'] ?> Total Data | <span class="badge badge-warning"><?= $b2['total'] ?> Data belum ditindak lanjuti</span></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="info-box mb-12 bg-primary">
                        <span class="info-box-icon"><i class="fas fa-envelope-open-text"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-1">Data Surat Masuk</h6>
                            <span><?= $c['total'] ?> Total Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="info-box mb-12 bg-primary">
                        <span class="info-box-icon"><i class="fas fa-mail-bulk"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-1">Data Disposisi</h6>
                            <span><?= $d['total'] ?> Total Data</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="info-box mb-12 bg-primary">
                        <span class="info-box-icon"><i class="fas fa-bell"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-1">Data Kegiatan</h6>
                            <span><?= $e['total'] ?> Total Data</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../template/footer.php';
?>