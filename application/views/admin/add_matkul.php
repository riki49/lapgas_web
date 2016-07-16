<?php
    $Kode="";
    $Nama_mk="";      
    $Semester=""; 
    
    if(isset($Matakuliah)){
        $Kode=$Matakuliah->Kode_mk;
        $Nama_mk=$Matakuliah->Nama_mk;
        $Semester=$Matakuliah->Semester;      
    }
?>

<?php $this->load->view('connection/form-2') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH DATA MATAKULIAH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Data Matakuliah
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <div class="row">
                                <form role="form" action="" method="post" enctype="multipart/form-data">                                                                             
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Matakuliah : </label>
                                            <input class="form-control" placeholder="Input Kode" name="Kode" value="<?php echo $Kode ?>" <?php if(isset($Matakuliah)){ echo "readonly"; }?> >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mata Kuliah : </label>
                                            <input class="form-control" placeholder="Input Nama Mata Kuliah" name="Nama_mk" value="<?php echo $Nama_mk ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Semester : </label>
                                            <select class="form-control" name="Semester">
                                                <option value="1" <?php if($Semester=="1"){echo"selected";}?> >1</option>
                                                <option value="2" <?php if($Semester=="2"){echo"selected";}?> >2</option>
                                                <option value="3" <?php if($Semester=="3"){echo"selected";}?> >3</option>
                                                <option value="4" <?php if($Semester=="4"){echo"selected";}?> >4</option>
                                                <option value="5" <?php if($Semester=="5"){echo"selected";}?> >5</option>
                                                <option value="6" <?php if($Semester=="6"){echo"selected";}?> >6</option>                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <center>
                                                <button type="submit" class="btn btn-default">SUBMT DATA</button>
                                                <button type="reset" class="btn btn-default">RESET DATA</button>
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