<?php
require 'app/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Sistem Informasi Aspirasi dan Pengaduan DPRD PROVINSI KALSEL</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/landing/img/logo.png" rel="icon">
	<link href="assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/landing/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/alert/sweetalert.css">

	<!-- Template Main CSS File -->
	<link href="assets/landing/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo">
				<a href="index.html"><img style="margin-top: -4px;" src="assets/landing/img/logo.png" alt="logo">
					DPRD<span> KALSEL</span>
				</a>
			</h1>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#aspirasi">Aspirasi</a></li>
					<li><a class="nav-link scrollto" href="#pengaduan">Pengaduan</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
			<h1>Sistem Informasi <br> <span>Layanan Aspirasi dan Pengaduan Masyarakat</span></h1>
			<h2 class="fw-bold">Dewan Perwakilan Rakyat Daerah Provinsi Kalimantan Selatan</h2>
			<a href="#aspirasi" class="btn-get-started scrollto mb-2"><i class="bx bxs-message-alt"></i> Form Aspirasi</a>
			<a href="#pengaduan" class="btn-get-started2 scrollto mb-2"><i class="bx bxs-message-alt"></i> Form Pengaduan</a>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= aspirasi Section ======= -->
		<section id="aspirasi" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2><i class="bx bxs-message-alt"></i> Aspirasi</h2>
					<h3><span>Sampaikan Aspirasi melalui form dibawah ini</span></h3>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-12">

						<form action="" method="POST" role="form" class="php-email-form">
							<div class="form-group">
								<label class="mb-1 fw-bold">Nama Lengkap</label>
								<input type="text" name="nm_lengkap" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label class="mb-1 fw-bold">Nomor HP / WA <br> <small><i>Nomor harus Aktif agar bisa dihubungi jika dibutuhkan informasi lebih lanjut dan Identitas Pengirim dijamin tidak akan bocor (AMAN)</i></small></label>
								<div class="input-group mb-">
									<span class="input-group-text" id="basic-addon1">+62</span>
									<input type="number" name="no_hp" class="form-control" placeholder="8xxxxxxxx" required>
								</div>
							</div>
							<div class="form-group">
								<label class="mb-1 fw-bold">Kategori Aspirasi</label>
								<select name="id_kategori_aspirasi" class="form-select" required>
									<option value="">-- Pilih Kategori --</option>
									<?php $data = $con->query("SELECT * FROM kategori_aspirasi ORDER BY id_kategori_aspirasi DESC"); ?>
									<?php foreach ($data as $row) : ?>
										<option value="<?= $row['id_kategori_aspirasi'] ?>"><?= $row['nm_kategori_aspirasi'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label class="mb-1 fw-bold">Pesan Aspirasi</label>
								<textarea name="pesan" class="form-control" placeholder="Ketikkan Pesan Aspirasi" rows="4" required></textarea>
							</div>
							<div class="text-center"><button type="submit" name="aspirasi">Kirim Aspirasi <i class="bx bx-mail-send"></i></button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Contact Section ======= -->
		<section id="pengaduan" class="contact section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title2">
					<h2><i class="bx bxs-message-alt"></i> Pengaduan</h2>
					<h3><span>Sampaikan Pengaduan melalui form dibawah ini</span></h3>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-12">
						<form action="" method="POST" role="form" class="php-email-form2">
							<div class="form-group">
								<label class="mb-1 fw-bold">Nama Lengkap</label>
								<input type="text" name="nm_lengkap" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label class="mb-1 fw-bold">Nomor HP / WA <br> <small><i>Nomor harus Aktif agar bisa dihubungi jika dibutuhkan informasi lebih lanjut dan Identitas Pengirim dijamin tidak akan bocor (AMAN)</i></small></label>
								<div class="input-group mb-">
									<span class="input-group-text" id="basic-addon1">+62</span>
									<input type="number" name="no_hp" class="form-control" placeholder="8xxxxxxxx" required>
								</div>
							</div>
							<div class="form-group">
								<label class="mb-1 fw-bold">Pesan Pengaduan</label>
								<textarea name="pesan" class="form-control" placeholder="Ketikkan Pesan Pengaduan" rows="4" required></textarea>
							</div>
							<div class="text-center"><button type="submit" name="pengaduan">Kirim Pengaduan <i class="bx bx-mail-send"></i></button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-12 footer-links text-center">
						<p><span class="fw-bold">Find Us</span> <br> Temukan Kami di berbagai Social Media dibawah ini</p>
						<div class="social-links mt-1">
							<a href="https://dprdkalselprov.id/" target="_blank"><i class="bx bx-world"></i></a>
							<a href="https://www.youtube.com/channel/UC_UaClco5fjAPrX1uuSBFgw" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
							<a href="https://www.facebook.com/DPRDKalsel" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="https://www.instagram.com/humas_dprdkalsel/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container py-4">
			<div class="copyright">
				&copy; Copyright <strong><span><?= date('Y') ?></span></strong>| PKL - Syintia Safitri
			</div>
			<div class="credits">
				Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/landing/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/landing/vendor/aos/aos.js"></script>
	<script src="assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/landing/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/alert/sweetalert.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/landing/js/main.js"></script>
</body>

</html>

<?php
if (isset($_POST['aspirasi'])) {
	$nm_lengkap = $_POST['nm_lengkap'];
	$no_hp = '+62' . $_POST['no_hp'];
	$tgl = date('Y-m-d');
	$jam = date('H:i');
	$id_kategori_aspirasi = $_POST['id_kategori_aspirasi'];
	$pesan = $_POST['pesan'];

	$tambah = $con->query("INSERT INTO aspirasi VALUES (
		default, 
		'$nm_lengkap',
		'$no_hp',
		'$tgl',
		'$jam',
		'$id_kategori_aspirasi',
		'$pesan',
		1,
		default,
		default
	)");

	if ($tambah) {
		echo "
        <script type='text/javascript'>
            setTimeout(function () {    
                swal({
                    title: 'Berhasil',
                    text:  'Aspirasi Anda telah disampaikan !',
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });     
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('index');
            } ,2000);   
        </script>";
	} else {
		echo "
        <script type='text/javascript'>
            setTimeout(function () {    
                swal({
                    title: 'Gagal',
                    text:  'Terjadi kesalahan Server !',
                    type: 'error',
                    timer: 2000,
                    showConfirmButton: false
                });     
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('index');
            } ,2000);   
        </script>";
	}
}

if (isset($_POST['pengaduan'])) {
	$nm_lengkap = $_POST['nm_lengkap'];
	$no_hp = '+62' . $_POST['no_hp'];
	$tgl = date('Y-m-d');
	$jam = date('H:i');
	$pesan = $_POST['pesan'];

	$tambah = $con->query("INSERT INTO pengaduan VALUES (
		default, 
		'$nm_lengkap',
		'$no_hp',
		'$tgl',
		'$jam',
		'$pesan',
		1,
		default,
		default
	)");

	if ($tambah) {
		if ($tambah) {
			echo "
			<script type='text/javascript'>
				setTimeout(function () {    
					swal({
						title: 'Berhasil',
						text:  'Pengaduan Anda telah disampaikan !',
						type: 'success',
						timer: 2000,
						showConfirmButton: false
					});     
				},10);  
				window.setTimeout(function(){ 
					window.location.replace('index');
				} ,2000);   
			</script>";
		} else {
			echo "
			<script type='text/javascript'>
				setTimeout(function () {    
					swal({
						title: 'Gagal',
						text:  'Terjadi kesalahan Server !',
						type: 'error',
						timer: 2000,
						showConfirmButton: false
					});     
				},10);  
				window.setTimeout(function(){ 
					window.location.replace('index');
				} ,2000);   
			</script>";
		}
	}
}
?>