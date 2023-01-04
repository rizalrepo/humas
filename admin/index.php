<?php
require '../app/config.php';
include_once '../template/header.php';
$page = 'dashboard';
include_once '../template/sidebar.php';

// $a1 = $con->query("SELECT COUNT(*) AS total FROM pendaftaran")->fetch_array();
// $a2 = $con->query("SELECT COUNT(*) AS total FROM pendaftaran WHERE verif = 1")->fetch_array();
// $a3 = $con->query("SELECT COUNT(*) AS total FROM pendaftaran WHERE verif = 0")->fetch_array();
// $b = $con->query("SELECT COUNT(*) AS total FROM diklat")->fetch_array();
// $c = $con->query("SELECT COUNT(*) AS total FROM peserta")->fetch_array();
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
                    <div class="info-box mb-12 bg-cyan">
                        <span class="info-box-icon"><i class="fas fa-comment-alt"></i></span>

                        <div class="info-box-content">
                            <h6 class="info-box-text mt-1 mb-0">Data Aspirasi</h6>
                            <span>2 Total Data</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
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