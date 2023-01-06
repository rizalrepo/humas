<?php
require '../../app/config.php';
include_once '../../template/header.php';
$page = 'masuk';
include_once '../../template/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark"><i class="fas fa-envelope-open-text ml-1 mr-1"></i> Tambah Data Surat Masuk</h4>
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
                                        <input type="text" class="form-control" name="no_surat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tgl_surat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Perihal</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="perihal" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Asal Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pengirim" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                    <div class="col-sm-10">
                                        <select name="id_jenis_surat" class="form-control select2" style="width: 100%;">
                                            <option value="">-- Pilih --</option>
                                            <?php $data = $con->query("SELECT * FROM jenis_surat ORDER BY id_jenis_surat DESC"); ?>
                                            <?php foreach ($data as $row) : ?>
                                                <option value="<?= $row['id_jenis_surat'] ?>"><?= $row['nm_jenis_surat'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Diterima</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tgl_terima" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bukti Diterima</label>
                                    <div class="col-sm-10">
                                        <input type="file" accept=".jpg,.JPG,.png,.PNG,.jpeg,.JPEG" class="form-control" name="bukti" required>
                                        <label style='color: red; font-style: italic; font-size: 12px;'>* Jenis File harus Foto/Gambar dan Ukuran File Maksimal 2MB</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="submit" class="btn btn-sm bg-cyan float-right"><i class="fa fa-save"> Simpan</i></button>
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

<?php
if (isset($_POST['submit'])) {
    $no_surat = $_POST['no_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $perihal = $_POST['perihal'];
    $pengirim = $_POST['pengirim'];
    $id_jenis_surat = $_POST['id_jenis_surat'];
    $tgl_terima = $_POST['tgl_terima'];

    $f_bukti = "";

    if (!empty($_FILES['bukti']['name'])) {

        // UPLOAD FILE 
        $file      = $_FILES['bukti']['name'];
        $x_file    = explode('.', $file);
        $ext_file  = end($x_file);
        $bukti = rand(1, 99999) . '.' . $ext_file;
        $size_file = $_FILES['bukti']['size'];
        $tmp_file  = $_FILES['bukti']['tmp_name'];
        $dir_file  = '../../file-bukti/masuk/';
        $allow_ext        = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
        $allow_size       = 2097152;
        // var_dump($bukti); die();

        if (in_array($ext_file, $allow_ext) === true) {
            if ($size_file <= $allow_size) {
                move_uploaded_file($tmp_file, $dir_file . $bukti);

                $f_bukti .= "Upload Success";
            } else {
                echo "
                <script type='text/javascript'>
                    setTimeout(function () {    
                        swal({
                            title: '',
                            text:  'Ukuran Foto Terlalu Besar, Maksimal 2 Mb',
                            type: 'warning',
                            timer: 3000,
                            showConfirmButton: true
                        });     
                    },10);   
                    window.setTimeout(function(){ 
                        window.location.replace('tambah');
                    } ,2000); 
                </script>";
            }
        } else {
            echo "
            <script type='text/javascript'>
                setTimeout(function () {    
                    swal({
                        title: 'Format File Tidak Didukung',
                        text:  'File Harus Berupa Gambar',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });     
                },10);  
                window.setTimeout(function(){ 
                    window.location.replace('tambah');
                } ,2000);  
            </script>";
        }
    } else {
        $bukti = $_POST['bukti'];
        $f_bukti .= "Upload Success!";
    }

    if (!empty($f_bukti)) {

        $tambah = $con->query("INSERT INTO surat_masuk VALUES (
            default, 
            '$no_surat', 
            '$tgl_surat', 
            '$perihal', 
            '$pengirim', 
            '$id_jenis_surat',
            '$tgl_terima',
            '$bukti'
        )");

        if ($tambah) {
            $_SESSION['pesan'] = "Data Berhasil di Simpan";
            echo "<meta http-equiv='refresh' content='0; url=index'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=tambah'>";
        }
    }
}


?>