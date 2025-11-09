<?php
include "koneksi.php";

// Proses simpan data dari pengunjung
if (isset($_POST['bsimpan'])) {
    $nama   = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nohp   = htmlspecialchars($_POST['nohp'], ENT_QUOTES);

    $simpan = mysqli_query($koneksi, "
        INSERT INTO guestbook 
        (created_at, guest_name, guest_address, purpose_of_visit, guest_phone, created_by) 
        VALUES (NOW(), '$nama', '$alamat', '$tujuan', '$nohp', 0)
    ");

    if ($simpan) {
        echo "<script>alert('Terima kasih! Data Anda telah dikirim dan menunggu verifikasi.');document.location='index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Maaf, data gagal dikirim. Silakan coba lagi.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Tamu Dinas Pendidikan dan Kebudayaan</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


</head>

<body class="bg-success bg-gradient">

    <div class="container py-5">
        <div class="card shadow-lg border-0 mx-auto" style="max-width: 500px;">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Form Buku Tamu</h4>
                <small>Dinas Pendidikan dan Kebudayaan Kab. Subang</small>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tujuan Kunjungan</label>
                        <input type="text" name="tujuan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor HP</label>
                        <input type="tel" name="nohp" class="form-control" pattern="[0-9+]+" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="bsimpan" class="btn btn-success px-4">
                            <i class="fa fa-paper-plane"></i> Kirim
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center small text-muted">
                Data Anda akan diverifikasi oleh admin setelah di kirim.
            </div>
        </div>
    </div>

    <footer class="text-center py-2 text-white-50 mt-4" style="font-size: 0.9rem;">
        © 2025 Mahasiswa PKL Universitas Mandiri — Dinas Pendidikan dan Kebudayaan Kab. Subang
    </footer>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>