<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'disposisi';
include_once '../../template/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fas fa-mail-bulk ml-1 mr-1"></i> Data Disposisi Surat Masuk</h4>
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
                                            <th>Data Surat</th>
                                            <th>Jenis Surat</th>
                                            <th>Tanggal Terima</th>
                                            <th>Disposisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = $con->query("SELECT * FROM surat_masuk a JOIN jenis_surat b ON a.id_jenis_surat = b.id_jenis_surat ORDER BY a.id_surat_masuk DESC");
                                        while ($row = $data->fetch_array()) {
                                        ?>
                                            <tr>
                                                <td align="center" width="5%"><?= $no++ ?></td>
                                                <td>
                                                    <b>Nomor</b> : <?= $row['no_surat'] ?>
                                                    <hr class="mt-1 mb-1">
                                                    <b>Tanggal</b> : <?= tgl($row['tgl_surat']) ?>
                                                    <hr class="mt-1 mb-1">
                                                    <b>Perihal</b> : <?= $row['perihal'] ?>
                                                    <hr class="mt-1 mb-1">
                                                    <b>Pengirim</b> : <?= $row['pengirim'] ?>
                                                </td>
                                                <td align="center"><?= $row['nm_jenis_surat'] ?></td>
                                                <td align="center"><?= tgl($row['tgl_terima']) ?></td>
                                                <td align="center">
                                                    <?php
                                                    $dpp = $con->query("SELECT * FROM disposisi a JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE id_surat_masuk = '$row[0]' ")->fetch_array();

                                                    $dpp2 = $con->query("SELECT * FROM disposisi a JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE id_surat_masuk = '$row[0]' ORDER BY a.id_unit_kerja ASC");


                                                    if ($dpp['id_surat_masuk'] == $row[0]) { ?>
                                                        <span class="btn btn-xs btn-success">
                                                            Surat Sudah Disposisi ke : <br>
                                                            <b>
                                                                <?php while ($row2 = $dpp2->fetch_array()) { ?>
                                                                    <?= $row2['nm_unit_kerja'] . '<br>' ?>
                                                                <?php } ?>
                                                            </b>
                                                        </span>
                                                    <?php } else { ?>
                                                        <span class="btn btn-xs btn-danger">Surat Belum di Disposisi !</span>
                                                    <?php } ?>
                                                </td>
                                                <td align="center" width="9%">
                                                    <a href="<?= base_url() ?>/file-bukti/masuk/<?= $row['bukti'] ?>" target="_blank" class="btn btn-primary btn-xs" title="Bukti"><i class="fa fa-camera"></i></a>
                                                    <a href="edit?id=<?= $row[0] ?>" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
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