<?php    
    $Kode="";
    $Angkatan="";
    $Kelas="";
    $Nama_mhs="";   
    $Nama_mk="";
    $Nominal="";        
    $Nilai="";        
    $tgl_bayar="";
    $tgl_input="";
    $pic="";
    $admin="";    
    $Status="";        
	$NPM="";


    if(isset($Pembayaran)){
        $Kode=$Pembayaran->Kode;
        $Angkatan=$Pembayaran->Angkatan;
        $Kelas=$Pembayaran->Kelas; 
        $Nama_mhs=$Pembayaran->Nama_mhs;
        $Nama_mk=$Pembayaran->Nama_mk;
        $Nominal=$Pembayaran->Nominal;        
        $Nilai=$Pembayaran->Nilai;        
        $tgl_bayar=$Pembayaran->tgl_bayar;       
        $tgl_input=$Pembayaran->tgl_input;               
        $pic=$Pembayaran->pic;
        $admin=$Pembayaran->admin;       
        $Status=$Pembayaran->Status;        
    }

    if(isset($Pembayaran_2)){
        $NPM=$Pembayaran_2;
    }
?>

<?php $this->load->view('connection/form-2') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH DATA PEMBAYARAN PRAKTEK</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Data Pembayaran
                        </div>
                        <div class="panel-body" style="background-color:transparent">                            
                            <div class="row">
                                <?php if(isset($Pembayaran)) { ?>
                                    <form action="http://localhost/lapgas/admin/e_bayar" method="post" enctype="multipart/form-data">                                                                             
                                <?php } else { ?>
                                    <form action="http://localhost/lapgas/admin/a_bayar" method="post" enctype="multipart/form-data">                                                                             
                                <?php } ?>
                                    <div class="col-lg-6">
                                        <div class="row">                                        
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <?php if(isset($Pembayaran)) { ?>                                                  
                                                        <input type="hidden" name="Kode" value="<?php echo $Kode ?>">
                                                        <input type="hidden" name="NPM" value="<?php echo $NPM ?>">
                                                        <input type="hidden" value="<?php echo $this->session->userdata('Nama') ?>" name="admin">
                                                    <?php } else { ?>
                                                        <input type="hidden" name="NPM" value="<?php echo $NPM ?>">
                                                        <input type="hidden" value="<?php echo $this->session->userdata('Nama') ?>" name="admin">
                                                    <?php } ?>
                                                    
                                                    <label>Angkatan : </label>  
                                                    <?php if(isset($Pembayaran)) { ?>                                                  
                                                        <input readonly class="form-control" name="Angkatan" value="<?php echo $Angkatan ?>">                                                    
                                                    <?php } else { ?>                                                  
                                                        <input readonly class="form-control" name="Angkatan" value="<?php echo $Mahasiswa_2->Angkatan ?>">                                                    
                                                    <?php }  ?>     
                                                </div>
                                            </div>  
                                            <div class="col-lg-6">
                                                <div class="form-group" disabled>
                                                    <label>Kelas : </label>
                                                    <?php if(isset($Pembayaran)) { ?>                                                  
                                                        <input readonly class="form-control" name="Kelas" value="<?php echo $Kelas ?>">                                                    
                                                    <?php } else { ?> 
                                                        <input readonly class="form-control" name="Kelas" value="<?php echo $Mahasiswa_2->Kelas ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>                                                                            
                                        <div class="form-group">
                                            <label>Mahasiswa : </label>
                                                <?php if(isset($Pembayaran)) { ?>
                                                    <input readonly class="form-control" name="Nama_mhs" value="<?php echo $Nama_mhs ?>">
                                                <?php } else { ?>
                                                    <select class='form-control' name='Nama_mhs'>
                                                        <?php foreach ($Mahasiswa_1 as $Mhs) { ?>  
                                                            <option value="<?php echo $Mhs->Nama;?>"><?php echo $Mhs->Nama;?></option> 
                                                        <?php } ?>                                               
                                                    </select>    
                                                <?php } ?>                                          
                                        </div>

                                        <div class="form-group">
                                            <label>Nominal : </label>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input required class="form-control" name="Nominal" value="<?php echo $Nominal ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <label>Matakuliah : </label>                                                                            
                                                    <select class='form-control' name='Nama_mk' size="0">
                                                        <option value="-">----</option>
                                                        <?php $no = 1; ?>
                                                        <?php foreach ($Matakuliah as $mk) { ?> 
                                                            <option value="<?php echo $mk->Nama_mk ?>" <?php if($Nama_mk==$mk->Nama_mk){echo"selected";}?> > 
                                                                <?php echo $no.". ".$mk->Nama_mk;?>                                                            
                                                            </option>
                                                        <?php $no++; } ?>                                               
                                                    </select>                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Nilai : </label>
                                                        <select class="form-control" name='Nilai' size="0">                                                        
                                                            <option value="-" <?php if($Nilai=="-"){echo"selected";}?>>-</option>
                                                            <option value="A" <?php if($Nilai=="A"){echo"selected";}?>>A</option>
                                                            <option value="B" <?php if($Nilai=="B"){echo"selected";}?>>B</option>
                                                            <option value="C" <?php if($Nilai=="C"){echo"selected";}?>>C</option>
                                                            <option value="D" <?php if($Nilai=="D"){echo"selected";}?>>D</option>
                                                            <option value="E" <?php if($Nilai=="E"){echo"selected";}?>>E</option>
                                                            <option value="F" <?php if($Nilai=="F"){echo"selected";}?>>F</option>
                                                            <option value="T" <?php if($Nilai=="T"){echo"selected";}?>>T</option>
                                                        </select>                                                                                                        
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">                                        
                                            <div class="col-lg-6">
                                                <div class="form-group">                                                                                                                                            
                                                    <label>Tanggal Bayar : </label><br>
                                                    <input required class="datepicker" autocomplete="off" name="tgl_bayar" value="<?php echo $tgl_bayar ?>">                                        
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">                                                                                                                                            
                                                    <label>Tanggal Input : </label><br>                                                    
                                                    <input class="form-control" value="<?php date_default_timezone_set("Asia/Jakarta");echo date("d/m/Y"); ?>" name="tgl_input" readonly>                                                   
                                                </div>
                                            </div>
                                        </div>
                                                                                                                
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Bukti Pembayaran : </label><br>
                                                    <?php if($pic==""){ ?>                                                
                                                        <input type="file" name="userfile" size="2000" />
                                                    <?php }else{ ?>  
                                                        <?php echo "<image src='".$pic."' class='img-rounded' width='200px' height='130px' "?>                                              
                                                        <br>
                                                        <input type="file" name="userfile" size="2000" />
                                                        <input type="hidden" name="userpic" value="<?php echo $pic ?>" />
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Status : </label><br>
                                                    <select class='form-control' name='Status' size="0">                                                        
                                                        <option value="-" <?php if($Status=="-"){echo"selected";}?>>----</option>
                                                        <option value="1" <?php if($Status=="1"){echo"selected";}?>>1. Merah</option>
                                                        <option value="2" <?php if($Status=="2"){echo"selected";}?>>2. Biru</option>
                                                        <option value="3" <?php if($Status=="3"){echo"selected";}?>>3. Abu</option>
                                                        <option value="4" <?php if($Status=="4"){echo"selected";}?>>4. Kuning</option>
                                                    </select> 
                                                </div>
                                            </div>

                                        </div>
                                        

                                        <div class="form-group">
                                            <center>
                                                <button type="submit" class="btn btn-default">SUBMT DATA</button>
                                                <button type="reset" class="btn btn-default">RESET DATA</button>
                                            </center>
                                        </div> 
                                    </div>                                                                                                                                                                                     
                                </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->