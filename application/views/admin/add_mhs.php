<?php
    $NPM="";
    $Nama_mhs="";   
    $Password="";
    $Gender="";
    $Angkatan="";
    $Kelas="";
    $Email="";
    $Telfon="";
    $Alamat="";
    $pic="";
    
    if(isset($Mahasiswa)){
        $NPM=$Mahasiswa->NPM;
        $Nama_mhs=$Mahasiswa->Nama; 
        $Password=$Mahasiswa->Password;
        $Gender=$Mahasiswa->Gender;
        $Angkatan=$Mahasiswa->Angkatan;
        $Kelas=$Mahasiswa->Kelas;       
        $Email=$Mahasiswa->Email;       
        $Telfon=$Mahasiswa->Telfon;       
        $Alamat=$Mahasiswa->Alamat;       
        $pic=$Mahasiswa->pic;       
    }
?>

<?php $this->load->view('connection/form') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH DATA MAHASISWA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Data Diri Mahasiswa
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <div class="row">                                
                                <form action"" method="post" enctype="multipart/form-data">                                                                                                     
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <?php if($pic==""){ ?>
                                                        <image src="<?php echo base_url()."assets/";?>img/default.png" width="130px" heigh="160px" class="img-rounded" alt="portrait">                                                        
                                                        <input type="file" name="userfile" size="2000" />
                                                    <?php }else{ ?>                                                        
                                                        <?php echo "<image src='".$pic."' class='img-rounded' width='130px' height='160px' title='".$Nama_mhs."' "?>                                              
                                                        <br><br>
                                                        <input type="file" name="userfile" size="2000" />
                                                        <input type="hidden" name="userpic" value="<?php echo $pic ?>" />
                                                    <?php } ?>
                                                </div>
                                            </div>  
                                            <div class="col-lg-6">
                                                <div class="form-group">                                            
                                                    <br><br>
                                                    
                                                    <label>Angkatan : </label><br>                                            
                                                    <select class="form-control" name="Angkatan">
                                                        <option value ="----" <?php if($Angkatan == "----")echo "selected";?>>----</option>
                                                        <option value ="2013" <?php if($Angkatan == "2013")echo "selected";?>>2013</option>
                                                        <option value ="2014" <?php if($Angkatan == "2014")echo "selected";?>>2014</option>
                                                        <option value ="2015" <?php if($Angkatan == "2015")echo "selected";?>>2015</option>
                                                        <option value ="2016" <?php if($Angkatan == "2016")echo "selected";?>>2016</option>
                                                        <option value ="2017" <?php if($Angkatan == "2017")echo "selected";?>>2017</option>
                                                        <option value ="2018" <?php if($Angkatan == "2018")echo "selected";?>>2018</option>
                                                        <option value ="2019" <?php if($Angkatan == "2019")echo "selected";?>>2019</option>
                                                        <option value ="2020" <?php if($Angkatan == "2010")echo "selected";?>>2020</option>                                                
                                                    </select>          

                                                    <br><br>

                                                    <label>Kelas : </label><br>                                          
                                                    <input required type="radio" name="Kelas" id="optionsRadiosInline1" value="A1" <?php if($Kelas == "A1")echo "checked";?> > A1 
                                                    &nbsp&nbsp
                                                    <input required type="radio" name="Kelas" id="optionsRadiosInline1" value="A2" <?php if($Kelas == "A2")echo "checked";?> > A2                                             
                                                    &nbsp&nbsp
                                                    <input required type="radio" name="Kelas" id="optionsRadiosInline1" value="B" <?php if($Kelas == "B")echo "checked";?> > B
                                                </div>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">
                                            <label>NPM : </label>
                                            <input required class="form-control" placeholder="Input NPM Mahasiswa" name="NPM" value="<?php echo $NPM ?>" <?php if(isset($Mahasiswa)){ echo "readonly"; }?> >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mahasiswa : </label>
                                            <input required class="form-control" placeholder="Input Nama Mahasiswa" name="Nama" value="<?php echo $Nama_mhs ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password : </label>
                                            <input required class="form-control" placeholder="Input Password" name="Password" type="password" value="<?php echo $Password ?>">
                                        </div>                                                                                                                    
                                        <div class="form-group">
                                            <label>Gender : </label><br>
                                            <label class="radio-inline">
                                                <input required type="radio" name="Gender" id="optionsRadiosInline1" value="laki-laki" <?php if($Gender == "laki-laki")echo "checked";?> >
                                                <i class="fa fa-male fa-fw"></i>Laki-laki
                                            </label>
                                            <label class="radio-inline">
                                                <input required type="radio" name="Gender" id="optionsRadiosInline2" value="perempuan" <?php if($Gender == "perempuan")echo "checked";?> >
                                                Perempuan<i class="fa fa-female fa-fw"></i>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail : </label>
                                            <input class="form-control" type="email" placeholder="Input E-mail Mahasiswa" name="Email" value="<?php echo $Email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telfon : </label>
                                            <input class="form-control" placeholder="Input Nomor Telfon Mahasiswa" name="Telfon" value="<?php echo $Telfon ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat : </label>
                                            <textarea class="form-control" rows="3" name="Alamat"><?php echo $Alamat ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <center>
                                                <button type="submit" class="btn btn-default">SUBMT DATA</button>
                                                <input type="reset" class="btn btn-default" value="RESET">
                                            </center>
                                        </div>                                                                                                                 
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
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