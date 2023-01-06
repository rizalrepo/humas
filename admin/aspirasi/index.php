<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'aspirasi';
include_once '../../template/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fas fa-comment-alt ml-1 mr-1"></i> Data Aspirasi</h4>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-lightblue card-outline">
                        <!-- form start -->
                        <div class="card-body" style="background-color: white;">

                            <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
                                <div id="notif" class="alert bg-teal" role="alert"><i class="fa fa-check-circle mr-2"></i><b><?= $_SESSION['pesan'] ?></b></div>
                            <?php $_SESSION['pesan'] = '';
                            } ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped dataTable">
                                    <thead class="bg-lightblue">
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Data Pengirim</th>
                                            <th>Waktu</th>
                                            <th>Pesan</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = $con->query("SELECT * FROM aspirasi a LEFT JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja ORDER BY a.id_aspirasi DESC");
                                        while ($row = $data->fetch_array()) {
                                        ?>
                                            <tr>
                                                <td align="center" width="5%"><?= $no++ ?></td>
                                                <td>
                                                    <b>Nama</b> : <?= $row['nm_lengkap'] ?>
                                                    <hr class="mt-1 mb-1">
                                                    <b>No HP</b> : <a href="https://wa.me/<?= $row['no_hp'] ?>" target="_blank"><?= $row['no_hp'] ?></a>
                                                </td>
                                                <td align="center"><?= tgl($row['tanggal']) ?> <br> Jam <?= $row['jam'] ?></td>
                                                <td><?= $row['pesan'] ?></td>
                                                <td>
                                                    <?php if ($row['status'] == 0) { ?>
                                                        <div class="text-center">
                                                            <span class="btn btn-xs btn-warning fw-bold">
                                                                Belum ada tindak lanjut
                                                            </span>
                                                        </div>
                                                    <?php } else if ($row['status'] == 2) { ?>
                                                        <div class="text-center">
                                                            <span class="btn btn-xs btn-danger fw-bold">
                                                                Data yang disampaikan tidak Valid
                                                            </span>
                                                        </div>
                                                    <?php } else { ?>
                                                        <b>Tindakan</b> : <?= $row['tindakan'] ?>
                                                        <hr class="mt-1 mb-1">
                                                        <b>PIC</b> : <?= $row['nm_unit_kerja'] ?>
                                                    <?php } ?>
                                                </td>
                                                <td align="center" width="9%">
                                                    <a href="edit?id=<?= $row[0] ?>" class="btn btn-info btn-xs" title="Udit"><i class="fa fa-edit"></i></a>
                                                    <?php if ($row['status'] != 0) { ?>
                                                        <a href="hapus?id=<?= $row[0] ?>" class="btn btn-danger btn-xs alert-hapus" title="Hapus"><i class="fa fa-trash"></i></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>
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