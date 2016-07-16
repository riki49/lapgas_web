<?php class PDF extends FPDF{

	//Page header
	function Header(){                                

                $this->setFont('Arial','',13);
                $this->setFillColor(255,255,255);                
                
                $logo1 = base_url().'assets/img/logo.png'; 
                $logo2 = base_url().'assets/img/logo-if.png';                                
                
                $this->Cell(25,6,' ',0,0,'L',0);   
                $this->cell(150,6,'LAPORAN PEMBAYARAN PRAKTIKUM TEKNIK INFORMATIKA',0,0,'C',1);                 
                $this->Cell(25,6,' ',0,0,'L',0);

                                $this->Ln();

                $this->Cell(25,6,$this->Image($logo1, 12, 8, 20,20),0,0,'C',0); 
                $this->cell(150,6,"UNIVERSITAS LANGLANGBUANA BANDUNG",0,0,'C',1); 
                $this->Cell(25,6,$this->Image($logo2, 188, 9, 20,20),0,0,'C',0);

                                $this->Ln();

                $this->Cell(25,6,'',0,0,'L',0);  
                $this->setFont('Arial','',10);                
                $this->cell(150,6,'Jalan Karapitan No.116, Jawa Barat, No. telp (022) 4218084',0,0,'C',1); 
                $this->Cell(25,6,'',0,0,'L',0);
                $this->Line(5,35,210,35);
                
                $this->Ln(20);                
                $this->SetX(5);
                $this->setFont('Arial','B',10);
                $this->setFillColor(175,175,175);                
                $this->cell(7,10,'No',1,0,'C',1);                                
                $this->cell(20,10,'Tanggal',1,0,'C',1);
                $this->cell(30,10,'NPM',1,0,'C',1);
                $this->cell(60,10,'Mahasiswa',1,0,'C',1);
                $this->cell(20,10,'Kode',1,0,'C',1);
                $this->cell(70,10,'Matakuliah',1,1,'C',1);                                          
                
	}
 
	function Content($Pembayaran){
            $ya = 46;
            $rw = 6;
            $no = 1;
                foreach ($Pembayaran as $key) {
                        $this->SetX(5);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);	
                        $this->cell(7,6,$no,1,0,'C',1);                        
                        $this->cell(20,6,$key->tgl_bayar,1,0,'C',1);
                        $this->cell(30,6,$key->NPM,1,0,'C',1);
                        $this->cell(60,6,$key->Nama_mhs,1,0,'L',1);
                        $this->cell(20,6,$key->Kode,1,0,'C',1);
                        $this->cell(70,6,$key->Nama_mk,1,1,'C',1);


                        $ya = $ya + $rw;
                        $no++;
                }

            $this->Ln(20);
            $this->SetFont('Arial','',10);
            $this->setFillColor(255,255,255); 
            $this->cell(30,10,'',0,0,'C',1);
            $this->cell(50,10,'Mengetahui :',0,1,'C',1);
            $this->cell(30,10,'',0,0,'C',1);
            $this->cell(50,10,'Ketua Jurusan',0,0,'C',1);
            $this->cell(30,10,'',0,0,'C',1);
            $this->cell(50,10,'Koordinator Lab',0,0,'C',1);            

            $this->Ln(20);
            $this->SetFont('Arial','',10);
            $this->setFillColor(255,255,255); 
            $this->cell(30,10,'',0,0,'C',1);
            $this->cell(50,10,'Ketua Jurusan',0,0,'C',1);
            $this->cell(30,10,'',0,0,'C',1);
            $this->cell(50,10,'Koordinator Lab',0,0,'C',1);

	}

	function Footer() {        

		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),210,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
                $this->Cell(0,10,'Copyright Universitas Langlangbuana Bandung ',0,0,'L');
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($Pembayaran);
$pdf->Output();