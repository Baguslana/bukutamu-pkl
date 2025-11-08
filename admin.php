<?php include "header.php"; ?>
<?php
if (isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');

    $nama   = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nohp   = htmlspecialchars($_POST['nohp'], ENT_QUOTES);

    $simpan = mysqli_query($koneksi, "INSERT INTO guestbook values ('', '$tgl', '$nama', '$alamat', '$tujuan', '$nohp')");

    if ($simpan) {
        echo "<script>alert('Simpan Data BERHASIL!!');document.location='?'</script>";
    } else {
        echo "<script>alert('Data GAGAL disimpan!!');document.location='?'</script>";
    }
}
?>


<!-- head -->
<style>
    .logo-img {
        max-width: 100px;
        height: auto;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {

        .head-text h2,
        .head-text h3 {
            font-size: 1.25rem;
        }
    }

    .glass-card1 {
        background: rgba(0, 0, 255, 1) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        transition: all 0.3s ease;
    }

    .glass-card2 {
        background: rgba(255, 165, 0) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        transition: all 0.3s ease;
    }

    .glass-card3 {
        background: rgba(25, 251, 125) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        transition: all 0.3s ease;
    }

    .glass-card4 {
        background: rgba(11, 102, 35) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        transition: all 0.3s ease;
    }

    .glass-card5 {
        background: rgba(192, 192, 192) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        background: rgba(23, 159, 73, 0.15) !important;
        transform: translateY(-2px);
        box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.5);
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    #particles-stats {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
</style>

<div class="head text-center">
    <!-- Logo di atas dan center -->
    <img src="assets/img/logo.png" class="img-fluid logo-img" alt="Logo Dinas">

    <!-- Teks di bawah logo -->
    <div class="head-text text-white">
        <h2 class="mb-1">Buku Tamu</h2>
        <h3>Dinas Pendidikan dan Kebudayaan Kab. Subang</h3>
    </div>
</div>

<!-- end head -->

<!-- row -->
<div class="row mt-2">
    <!-- statistik pengujung -->
    <div class="col-12 mb-3">
        <div class="card shadow h-100 position-relative overflow-hidden"> <!-- Tambah position-relative & overflow-hidden -->
            <!-- Particles Background Container -->
            <div id="particles-stats" class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: 1;"></div>

            <div class="card-body d-flex flex-column position-relative" style="z-index: 2;"> <!-- z-index tinggi untuk konten -->
                <div class="text-center mb-3">
                    <h1 class="h4 text-white mb-0 fw-bold text-shadow">Statistik Pengunjung</h1>
                </div>

                <?php
                // ===== Query untuk summary cards =====
                $tgl_sekarang   = date('Y-m-d');
                $kemarin        = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));
                $seminggu       = date('Y-m-d H:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));
                $bulan_ini      = date('m');
                $sekarang       = date('Y-m-d H:i:s');

                $hari_ini_count     = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM guestbook WHERE created_at LIKE '%$tgl_sekarang%'"));
                $kemarin_count      = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM guestbook WHERE created_at LIKE '%$kemarin%'"));
                $seminggu_count     = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM guestbook WHERE created_at BETWEEN '$seminggu' AND '$sekarang'"));
                $sebulan_count      = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM guestbook WHERE MONTH(created_at) = '$bulan_ini'"));
                $keseluruhan_count  = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM guestbook"));

                // ===== Query untuk chart: 7 hari terakhir =====
                $chart_labels = [];
                $chart_values = [];
                for ($i = 6; $i >= 0; $i--) {
                    $d = date('Y-m-d', strtotime("-$i day"));
                    $chart_labels[] = date('d M', strtotime($d));
                    $row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS jml FROM guestbook WHERE created_at = '$d'"));
                    $chart_values[] = (int)$row['jml'];
                }
                ?>


                <!-- Chart Container -->
                <div class="flex-grow-1 d-flex align-items-center justify-content-center mb-3">
                    <div style="position: relative; width: 100%; height: 250px;">
                        <canvas id="visitorChart"></canvas>
                    </div>
                </div>

                <!-- Summary Cards dengan glass effect -->
                <div class="row g-2 mt-auto">
                    <div class="col">
                        <div class="card glass-card1 text-light border-0">
                            <div class="card-body p-1 text-center">
                                <div class="h6 mb-0 fw-bold"><?= $hari_ini_count[0] ?></div>
                                <div class="small">Hari Ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card glass-card2 text-light border-0">
                            <div class="card-body p-1 text-center">
                                <div class="h6 mb-0 fw-bold"><?= $kemarin_count[0] ?></div>
                                <div class="small">Kemarin</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card glass-card3 text-white border-0">
                            <div class="card-body p-1 text-center">
                                <div class="h6 mb-0 fw-bold"><?= $seminggu_count[0] ?></div>
                                <div class="small">Minggu Ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card glass-card4 text-white border-0">
                            <div class="card-body p-1 text-center">
                                <div class="h6 mb-0 fw-bold"><?= $sebulan_count[0] ?></div>
                                <div class="small">Bulan Ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card glass-card5 text-white border-0">
                            <div class="card-body p-1 text-center">
                                <div class="h6 mb-0 fw-bold"><?= $keseluruhan_count[0] ?></div>
                                <div class="small">Total</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end statistik pengunjung  -->
</div>
<!-- end row -->

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Pengunjung Hari ini [<?= date('Y-m-d') ?>]</h6>
        <a href="logout.php" class="btn btn-danger mb-3"><i class="fa fa-sign-out-alt"> Logout</i></a>
    </div>
    <div class="card-body">
        <form id="filterForm" class="row g-2 mb-3" method="get" action="">
            <?php
            $today = date('Y-m-d');
            $tgl1  = isset($_GET['tanggal1']) ? $_GET['tanggal1'] : $today;
            $tgl2  = isset($_GET['tanggal2']) ? $_GET['tanggal2'] : $today;
            ?>
            <div class="col-auto">
                <label class="form-label mb-1">Dari Tanggal</label>
                <input class="form-control" type="date" name="tanggal1" value="<?= $tgl1 ?>" required>
            </div>
            <div class="col-auto">
                <label class="form-label mb-1">Sampai Tanggal</label>
                <input class="form-control" type="date" name="tanggal2" value="<?= $tgl2 ?>" required>
            </div>
        </form>
        <div class="text-end mb-3">
            <a href="" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama Pengunjung</th>
                        <th>Alamat Pengunjung</th>
                        <th>Tujuan</th>
                        <th>No.HP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tgl1 = isset($_GET['tanggal1']) ? $_GET['tanggal1'] : date('Y-m-d');
                    $tgl2 = isset($_GET['tanggal2']) ? $_GET['tanggal2'] : date('Y-m-d');

                    $tampil = mysqli_query($koneksi, "SELECT * FROM guestbook WHERE created_at BETWEEN '$tgl1' AND '$tgl2' ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['created_at'] ?></td>
                            <td><?= $data['guest_name'] ?></td>
                            <td><?= $data['guest_address'] ?></td>
                            <td><?= $data['purpose_of_visit'] ?></td>
                            <td><?= $data['guest_phone'] ?></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('#filterForm input[type="date"]').forEach(el => {
        el.addEventListener('change', () => document.getElementById('filterForm').submit());
    });
</script>
<?php include "footer.php"; ?>