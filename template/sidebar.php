<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text">DPRD KALSEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-1 mb-1 d-flex">
            <div class="info">
                <a href="#" class="d-block"><i class="fas fa-user-circle mr-1"></i><b>
                        <?= $_SESSION['nm_user'] ?>
                    </b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menu</li>
                <?php if ($_SESSION['level'] == 1) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview  <?php if (
                                                            $page == 'user' || $page == 'unit-kerja' || $page == 'jenis-kegiatan' || $page == 'jenis-surat' | $page == 'kategori-aspirasi'
                                                        ) {
                                                            echo 'menu-open';
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (
                                                        $page == 'user' || $page == 'unit-kerja' || $page == 'jenis-kegiatan' || $page == 'jenis-surat' | $page == 'kategori-aspirasi'
                                                    ) {
                                                        echo 'active';
                                                    } ?>">
                            <i class="nav-icon fa fa-database"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/user/" class="nav-link <?php if ($page == 'user') {
                                                                                            echo 'active';
                                                                                        } ?>">
                                    <i class="fas fa-user mr-1"></i>
                                    <p>Data Pengguna</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/unit-kerja/" class="nav-link <?php if ($page == 'unit-kerja') {
                                                                                                    echo 'active';
                                                                                                } ?>">
                                    <i class="fas fa-sitemap mr-1"></i>
                                    <p>Data Unit Kerja</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/jenis-surat/" class="nav-link <?php if ($page == 'jenis-surat') {
                                                                                                    echo 'active';
                                                                                                } ?>">
                                    <i class="fas fa-bookmark mr-1"></i>
                                    <p>Data Jenis Surat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/jenis-kegiatan/" class="nav-link <?php if ($page == 'jenis-kegiatan') {
                                                                                                        echo 'active';
                                                                                                    } ?>">
                                    <i class="fas fa-layer-group mr-1"></i>
                                    <p>Data Jenis Kegiatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/kategori-aspirasi/" class="nav-link <?php if ($page == 'kategori-aspirasi') {
                                                                                                            echo 'active';
                                                                                                        } ?>">
                                    <i class="fas fa-stream mr-1"></i>
                                    <p>Data Kategori Aspirasi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/aspirasi/" class="nav-link <?php if ($page == 'aspirasi') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fas fa-comment-alt"></i>
                            <p>
                                Data Aspirasi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/pengaduan/" class="nav-link <?php if ($page == 'pengaduan') {
                                                                                            echo 'active';
                                                                                        } ?>">
                            <i class="nav-icon fas fa-comment-dots"></i>
                            <p>
                                Data Pengaduan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/masuk/" class="nav-link <?php if ($page == 'masuk') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-envelope-open-text"></i>
                            <p>
                                Data Surat Masuk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/disposisi/" class="nav-link <?php if ($page == 'disposisi') {
                                                                                            echo 'active';
                                                                                        } ?>">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Data Disposisi Surat Masuk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/kegiatan/" class="nav-link <?php if ($page == 'kegiatan') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Data Kegiatan
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_aspirasi">
                                    <p><i class="fa fa-file-alt mr-1"></i> Aspirasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_pengaduan">
                                    <p><i class="fa fa-file-alt mr-1"></i> Pengaduan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_masuk">
                                    <p><i class="fa fa-file-alt mr-1"></i> Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_disposisi">
                                    <p><i class="fa fa-file-alt mr-1"></i> Disposisi Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kegiatan">
                                    <p><i class="fa fa-file-alt mr-1"></i> Kegiatan</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_aspirasi">
                                    <p><i class="fa fa-file-alt mr-1"></i> Aspirasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_pengaduan">
                                    <p><i class="fa fa-file-alt mr-1"></i> Pengaduan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_masuk">
                                    <p><i class="fa fa-file-alt mr-1"></i> Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_disposisi">
                                    <p><i class="fa fa-file-alt mr-1"></i> Disposisi Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kegiatan">
                                    <p><i class="fa fa-file-alt mr-1"></i> Kegiatan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>

<?php include 'modal.php'; ?>