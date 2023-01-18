<?php
include '../../app/config.php';

$no = 1;

if (isset($_POST['cetak'])) {

    $tgl1 = $_POST['tgl1'];
    $cektgl1 = isset($tgl1);
    $tgl2 = $_POST['tgl2'];
    $cektgl2 = isset($tgl2);
    if ($tgl1 == $cektgl1 && $tgl2 == $cektgl2) {

        $sql = mysqli_query($con, "SELECT * FROM surat_masuk a JOIN jenis_surat b ON a.id_jenis_surat = b.id_jenis_surat WHERE a.tgl_terima BETWEEN '$tgl1' AND '$tgl2' ORDER BY tgl_terima ASC");

        $label = 'LAPORAN DISPOSISI SURAT MASUK <br> Tanggal Terima Surat : ' . tgl($tgl1) . ' s/d ' . tgl($tgl2);
    } else {
        $sql = mysqli_query($con, "SELECT * FROM surat_masuk a JOIN jenis_surat b ON a.id_jenis_surat = b.id_jenis_surat ORDER BY tgl_terima DESC");
        $label = 'LAPORAN DISPOSISI SURAT MASUK';
    }
}

require_once '../../assets/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'LEGAL-L']);
ob_start();
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Disposisi Surat Masuk</title>
</head>

<style>
    th {
        color: white;
    }
</style>

<body>
    <div class="table-responsive">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td align="center">
                    <img src="<?= base_url('assets/images/logo.png') ?>" align="left" height="75">
                </td>
                <td align="center">
                    <h4>PEMERINTAH PROVINSI KALIMANTAN SELATAN</h4>
                    <h2>DEWAN PERWAKILAN RAKYAT DAERAH</h2>
                    <h6>Jl. Lambung Mangkurat No.18, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan Kodepos 70111</h6>
                </td>
                <td align="center">
                    <img src="<?= base_url('assets/images/pelengkap.png') ?>" align="right" height="75">
                </td>
            </tr>
        </table>
    </div>
    <hr size="2px" color="black">

    <h4 align="center">
        <?= $label ?><br>
    </h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" cellpadding="6" width="100%">
                    <thead>
                        <tr bgcolor="#17A2B8" align="center">
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Perihal</th>
                            <th>Pengirim</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Terima Surat</th>
                            <th>Tujuan Disposisi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td align="center" width="5%"><?= $no++; ?></td>
                                <td align="center"><?= $data['no_surat'] ?></td>
                                <td align="center"><?= tgl($data['tgl_surat']) ?></td>
                                <td align="center"><?= $data['perihal'] ?></td>
                                <td align="center"><?= $data['pengirim'] ?></td>
                                <td align="center"><?= $data['nm_jenis_surat'] ?></td>
                                <td align="center"><?= tgl($data['tgl_terima']) ?></td>
                                <td align="center">
                                    <?php
                                    $q = mysqli_query($con, "SELECT * FROM disposisi a JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE a.id_surat_masuk = '$data[id_surat_masuk]' ORDER BY a.id_disposisi ASC");
                                    while ($d = mysqli_fetch_array($q)) {
                                        echo $d['nm_unit_kerja'] . '<br>';
                                    } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
    <br>

    <br>
    <div class="table-responsive">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td align="center" width="85%">
                </td>
                <td align="center">
                    <h6>
                        <?= tgl_indo(date('Y-m-d')) ?><br>
                        Banjarmasin <br>
                        <br><br><br><br>
                        <u>Kabag. Humas DPRD KALSEL</u><br>
                    </h6>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>