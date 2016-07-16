<?php $this->load->view('connection/form-2') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-m') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">UBAH PASSWORD ADMIN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Password
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <div class="row">
                                <form role="form" action="" method="post" enctype="multipart/form-data">                                                                             
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password Lama : </label>
                                            <input readonly class="form-control" name="password" value="<?php echo $mahasiswa->Password ?>" type="password" >
                                        </div>
                                        <div class="form-group">
                                            <label>Syncronasi : </label>
                                            <input class="form-control" name="l_password" type="password" placeholder="Input Password Lama">
                                        </div>
                                        <div class="form-group">
                                            <label>Password Baru : </label>
                                            <input class="form-control" name="b_password" type="password" placeholder="Input Password Baru">
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