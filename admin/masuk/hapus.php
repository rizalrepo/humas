<?php
require '../../app/config.php';
include_once '../../template/header.php';
include_once '../../template/sidebar.php';
include_once '../../template/footer.php';

$id = $_GET['id'];
$data  = $con->query("SELECT * FROM surat_masuk WHERE id_surat_masuk = '$id'")->fetch_array();
$query = $con->query(" DELETE FROM surat_masuk WHERE id_surat_masuk = '$id' ");
if ($query) {
    $file = $data['bukti'];
    if ($file != null) {
        unlink('../../file-bukti/masuk/' . $file);
    }
    $_SESSION['pesan'] = "Data Berhasil di Hapus";
    echo "<meta http-equiv='refresh' content='0; url=index'>";
} else {
    echo "Data anda gagal dihapus. Ulangi sekali lagi";
    echo "<meta http-equiv='refresh' content='0; url=index'>";
}
