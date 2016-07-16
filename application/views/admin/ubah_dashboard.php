<?php
    $Title="";
    $Content="";      
    $Date=""; 
    
    if(isset($dashboard)){
        $Title=$dashboard->Title;
        $Content=$dashboard->Content;
        $Date=$dashboard->Date;
    }
?>

<?php $this->load->view('connection/form-2') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TEKNIK INFORMATIKA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Tanggal : <?php echo date("d-m-Y") ; ?>                            
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <div class="row">
                                <form role="form" action="" method="post" enctype="multipart/form-data">                                                                             
                                    <div class="col-lg-6 col-lg-offset-0">
                                        <div class="form-group">
                                            <label>Judul : </label>
                                            <input class="form-control" name="Title" value="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Konten : </label>
                                            <textarea class="form-control" name="Content" rows="10"></textarea>
                                            <input hidden name="Date" value="<?php echo date("d-m-Y") ; ?>">                                            
                                        </div>  

                                    <div class="form-group">
                                            <center>
                                                <button type="submit" class="btn btn-default" onclick="return confirm('Edit Dashboard ?')">SUBMT DATA</button>
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