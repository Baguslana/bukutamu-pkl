<?php
require 'vendor/autoload.php';
include "koneksi.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

// Buat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set lebar kolom
$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(15);
$sheet->getColumnDimension('C')->setWidth(25);
$sheet->getColumnDimension('D')->setWidth(30);
$sheet->getColumnDimension('E')->setWidth(25);
$sheet->getColumnDimension('F')->setWidth(18);

// Tambahkan logo
$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing->setName('Logo');
$drawing->setPath('assets/img/logo.png'); // ganti dengan logo Anda
$drawing->setCoordinates('A1');
$drawing->setOffsetX(10);
$drawing->setHeight(80);
$drawing->setWorksheet($sheet);

// Judul
$sheet->mergeCells('B2:F2')->setCellValue('B2', 'PEMERINTAH KABUPATEN SUBANG');
$sheet->mergeCells('B3:F3')->setCellValue('B3', 'DINAS PENDIDIKAN DAN KEBUDAYAAN');
$sheet->mergeCells('B4:F4')->setCellValue('B4', 'Jl. K.S Tubun No.2, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211');
$sheet->mergeCells('A6:F6')->setCellValue('A6', 'Rekapitulasi Data Pengunjung');

$sheet->getStyle('B2:F4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A6:F6')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('B2:F4')->getFont()->setBold(true);
$sheet->getStyle('A6')->getFont()->setBold(true);

// Header tabel
$header = ['No', 'Tanggal', 'Nama Pengunjung', 'Alamat', 'Tujuan', 'No. HP'];
$sheet->fromArray($header, null, 'A7');

// Ambil data sesuai filter tanggal
$tgl1 = $_POST['tanggala'];
$tgl2 = $_POST['tanggalb'];
$sql = mysqli_query($koneksi, "SELECT * FROM guestbook WHERE created_at BETWEEN '$tgl1' AND '$tgl2' ORDER BY id ASC");

$no = 1;
$row = 8;
while ($d = mysqli_fetch_assoc($sql)) {
    $sheet->setCellValue("A$row", $no++);
    $sheet->setCellValue("B$row", date('d-m-Y', strtotime($d['created_at'])));
    $sheet->setCellValue("C$row", $d['guest_name']);
    $sheet->setCellValue("D$row", $d['guest_address']);
    $sheet->setCellValue("E$row", $d['purpose_of_visit']);
    $sheet->setCellValueExplicit("F$row", $d['guest_phone'], \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
    $row++;
}

// Tambahkan border
$lastRow = $row - 1;
$sheet->getStyle("A7:F$lastRow")->applyFromArray([
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000'],
        ],
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical'   => Alignment::VERTICAL_CENTER,
    ],
]);

// Tambahkan tanda tangan
$tandaTanganRow = $lastRow + 3;
$sheet->mergeCells("E$tandaTanganRow:F$tandaTanganRow")
    ->setCellValue("E$tandaTanganRow", "Subang, " . date('d-m-Y'));

$sheet->mergeCells("E" . ($tandaTanganRow + 1) . ":F" . ($tandaTanganRow + 1))
    ->setCellValue("E" . ($tandaTanganRow + 1), "Mengetahui,");

$sheet->mergeCells("E" . ($tandaTanganRow + 2) . ":F" . ($tandaTanganRow + 2))
    ->setCellValue("E" . ($tandaTanganRow + 2), "Penanggung Jawab");

$sheet->mergeCells("E" . ($tandaTanganRow + 6) . ":F" . ($tandaTanganRow + 6))
    ->setCellValue("E" . ($tandaTanganRow + 6), "____________________");

// $sheet->mergeCells("E".($tandaTanganRow+7).":F".($tandaTanganRow+7))
//       ->setCellValue("E".($tandaTanganRow+7), "Nama Lengkap");

$sheet->getStyle("E$tandaTanganRow:F" . ($tandaTanganRow + 7))
    ->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

// Output ke browser
$filename = "Data_Pengunjung.xlsx";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
