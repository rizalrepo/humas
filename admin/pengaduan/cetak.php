<?php
include '../../app/config.php';

$no = 1;

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

if (isset($_POST['cetak'])) {

    $bulan = $_POST['bulan'];
    $cekbulan = isset($bulan);
    $tahun = $_POST['tahun'];
    $cektahun = isset($tahun);
    $pengaduan = $_POST['pengaduan'];
    $cekpengaduan = isset($pengaduan);

    if ($pengaduan == 1) {
        $sub = 'Belum ada Tindakan';
    } else if ($pengaduan == 2) {
        $sub = 'Pengaduan ditindak lanjuti';
    } else {
        $sub = 'Data yang disampaikan tidak Valid';
    }

    if ($bulan == $cekbulan && $tahun == $cektahun && $pengaduan == null) {
        $sql = mysqli_query($con, "SELECT * FROM pengaduan a LEFT JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE MONTH(a.tanggal) = '$bulan' AND YEAR(a.tanggal) = '$tahun' ORDER BY tanggal ASC");
        $label = 'LAPORAN PENGADUAN <br> Bulan : ' . $bln[date($bulan)] . ' ' . $tahun;
    } else if ($bulan == null && $tahun == null && $pengaduan == $cekpengaduan) {
        $sql = mysqli_query($con, "SELECT * FROM pengaduan a LEFT JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE a.status = '$pengaduan' ORDER BY tanggal DESC");
        $label = 'LAPORAN PENGADUAN <br> Status Pesan : ' . $sub;
    } else if ($bulan == $cekbulan && $tahun == $cektahun && $pengaduan == $cekpengaduan) {
        $sql = mysqli_query($con, "SELECT * FROM pengaduan a LEFT JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja WHERE MONTH(a.tanggal) = '$bulan' AND YEAR(a.tanggal) = '$tahun' AND a.status = '$pengaduan' ORDER BY tanggal ASC");
        $label = 'LAPORAN PENGADUAN <br> Bulan : ' . $bln[date($bulan)] . ' ' . $tahun . '<br> Status Pesan : ' . $sub;
    } else {
        $sql = mysqli_query($con, "SELECT * FROM pengaduan a LEFT JOIN unit_kerja b ON a.id_unit_kerja = b.id_unit_kerja ORDER BY tanggal DESC");
        $label = 'LAPORAN PENGADUAN';
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
    <title>Laporan Pengaduan</title>
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
                    <img src="<?= base_url('assets/images/logo.png') ?>" align="left" height="100">
                </td>
                <td align="center">
                    <h4>PEMERINTAH PROVINSI KALIMANTAN SELATAN</h4>
                    <h2>DEWAN PERWAKILAN RAKYAT DAERAH</h2>
                    <h6>Jl. Lambung Mangkurat No.18, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan Kodepos 70111</h6>
                </td>
                <td align="center">
                    <img src="<?= base_url('assets/images/pelengkap.png') ?>" align="right" height="100">
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
                        <tr bgcolor="#007BFF" align="center">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor HP</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Pesan</th>
                            <th>Tindakan</th>
                            <th>Tujuan Unit Kerja</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td align="center" width="5%"><?= $no++; ?></td>
                                <td><?= $data['nm_lengkap'] ?></td>
                                <td align="center"><?= $data['no_hp'] ?></td>
                                <td align="center"><?= tgl($data['tanggal']) ?></td>
                                <td align="center"><?= $data['jam'] ?></td>
                                <td><?= $data['pesan'] ?></td>
                                <td>
                                    <?php if ($data['status'] == 1) { ?>
                                        <div style="text-align: center;">
                                            Belum ada tindak lanjut
                                        </div>
                                    <?php } else if ($data['status'] == 3) { ?>
                                        <div style="text-align: center;">
                                            Data yang disampaikan tidak Valid
                                        </div>
                                    <?php } else { ?>
                                        <div style="text-align: center;">
                                            Pegaduan ditindak lanjuti
                                        </div>
                                        <hr style="margin: 3px 0;">
                                        <b>Tindakan</b> : <?= $data['tindakan'] ?>
                                    <?php } ?>
                                </td>
                                <td align="center"><?= $data['nm_unit_kerja'] ?></td>
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