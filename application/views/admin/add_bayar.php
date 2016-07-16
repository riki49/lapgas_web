<?php    
    $Kode="";
    $Angkatan="";
    $Kelas="";
    $Nama_mhs="";   
    $Nama_mk="";
    $Nominal="";        
    $tgl_bayar="";
    $tgl_input="";
    $pic="";
    $admin="";    
	$NPM="";


    if(isset($Pembayaran)){
        $Kode=$Pembayaran->Kode;
        $Angkatan=$Pembayaran->Angkatan;
        $Kelas=$Pembayaran->Kelas; 
        $Nama_mhs=$Pembayaran->Nama_mhs;
        $Nama_mk=$Pembayaran->Nama_mk;
        $Nominal=$Pembayaran->Nominal;        
        $tgl_bayar=$Pembayaran->tgl_bayar;       
        $tgl_input=$Pembayaran->tgl_input;               
        $pic=$Pembayaran->pic;
        $admin=$Pembayaran->admin;       
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
                                                    <?php foreach ($Matakuliah as $mk) { ?> 
                                                        <?php $no = 1; ?>
                                                        <select class='form-control' name='Nama_mk[]' size="0">
                                                            <option value="-">----</option>
                                                            <?php foreach ($Matakuliah as $mk) { ?> 
                                                                <option value="<?php echo $mk->Nama_mk ?>" <?php if($Nama_mk==$mk->Nama_mk){echo"selected";}?> > 
                                                                    <?php echo $no.". ".$mk->Nama_mk;?>                                                            
                                                                </option>
                                                            <?php $no++; } ?>                                               
                                                        </select>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Nilai : </label>
                                                    <?php foreach ($Matakuliah as $mk) { ?> 
                                                        <select class="form-control" name='Nilai[]' size="0">                                                        
                                                            <option value="-">-</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                            <option value="T">T</option>
                                                        </select>                                                    
                                                    <?php } ?>
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
                                                    <input class="form-control" value="<?php date_default_timezone_set("Asia/Jakarta");echo date("d-m-Y"); ?>" name="tgl_input" readonly>                                                   
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
                                                        <option value="-">----</option>
                                                        <option value="A">1. Kode A</option>
                                                        <option value="B">2. Kode B</option>
                                                        <option value="C">3. Kode C</option>
                                                        <option value="D">4. Kode D</option>
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