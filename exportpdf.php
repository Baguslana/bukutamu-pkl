<?php
require('fpdf/fpdf.php');
include "koneksi.php";

class PDF_MC_Table extends FPDF {
    var $widths;
    var $aligns;

    function SetWidths($w){
        $this->widths=$w;
    }

    function SetAligns($a){
        $this->aligns=$a;
    }

    function Row($data){
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        $this->CheckPageBreak($h);
        for($i=0;$i<count($data);$i++){
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            $x=$this->GetX();
            $y=$this->GetY();
            $this->Rect($x,$y,$w,$h);
            $this->MultiCell($w,5,$data[$i],0,$a);
            $this->SetXY($x+$w,$y);
        }
        $this->Ln($h);
    }

    function CheckPageBreak($h){
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w,$txt){
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0; $j=0; $l=0; $nl=1;
        while($i<$nb){
            $c=$s[$i];
            if($c=="\n"){
                $i++; $sep=-1; $j=$i; $l=0; $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax){
                if($sep==-1){
                    if($i==$j)
                        $i++;
                }else
                    $i=$sep+1;
                $sep=-1; $j=$i; $l=0; $nl++;
            }else
                $i++;
        }
        return $nl;
    }
}

$pdf = new PDF_MC_Table('P','mm','A4');
$pdf->AddPage();

// Logo & Kop
$pdf->Image('assets/img/logo.png', 10, 10, 20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,7,'PEMERINTAH KABUPATEN SUBANG',0,1,'C');
$pdf->Cell(0,7,'DINAS PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,' Jl. K.S Tubun No.2, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211',0,1,'C');
$pdf->Ln(5);
$pdf->SetLineWidth(1);
$pdf->Line(10, 35, 200, 35);
$pdf->SetLineWidth(0);
$pdf->Line(10, 36, 200, 36);
$pdf->Ln(10);

// Judul
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'Rekapitulasi Data Pengunjung',0,1,'C');
$pdf->Ln(5);

// Header Tabel
$pdf->SetFont('Arial','B',10);
$pdf->SetWidths([10, 25, 35, 45, 45, 30]);
$pdf->Row(['No','Tanggal','Nama Pengunjung','Alamat','Tujuan','No. HP']);

// Isi Tabel
$pdf->SetFont('Arial','',10);
$no=1;
$tgl1 = $_POST['tanggala'];
$tgl2 = $_POST['tanggalb'];
$sql = mysqli_query($koneksi,"SELECT * FROM ttamu WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' ORDER BY id ASC");
while($row = mysqli_fetch_array($sql)){
    $pdf->Row([
        $no++,
        $row['tanggal'],
        $row['nama'],
        $row['alamat'],
        $row['tujuan'],
        $row['nohp']
    ]);
}

// Tanda Tangan
$pdf->Ln(2);
$pdf->Cell(120,6,'',0,0);
$pdf->Cell(70,6,'Subang, '.date('d-m-Y'),0,1,'C');
$pdf->Cell(120,6,'',0,0);
$pdf->Cell(70,6,'Penanggung Jawab,',0,1,'C');
$pdf->Ln(15);
$pdf->Cell(120,6,'',0,0);
$pdf->Cell(70,6,'____________________',0,1,'C');


$pdf->Output();
