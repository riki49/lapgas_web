<?php $this->load->view('connection/form') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-m') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile <?php echo $this->session->userdata('Nama');?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Teknik Informatika - <?php echo $mahasiswa->Angkatan;?> - <?php echo $mahasiswa->Kelas;?>
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <div class="row">                                
                                <div class="col-lg-3">
                                    <center>
                                        <?php echo "<image src='".$mahasiswa->pic."' class='img-rounded' width='130px' height='160px' title='".$mahasiswa->Nama."' "?>
                                        <br><br><br>
                                        <a href="http://localhost/lapgas/mahasiswa/e_profile/<?php echo $this->session->userdata('NPM');?>">
                                            <button type="button" class="btn btn-info">Edit Profile</button>
                                        </a>
                                    </center>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" style="width: 75%; float: left">
                                            <label>Nama Mahasiswa : </label>
                                            <input readonly class="form-control" name="Nama" value="<?php echo $mahasiswa->Nama ?>">
                                    </div>
                                    <div class="form-group" style="width: 20%; float: right">
                                            <label>Gender : </label>
                                            <input readonly class="form-control" name="Gender" value="<?php echo $mahasiswa->Gender ?>">
                                    </div>
                                    <div class="form-group" style="width: 65%; float: left">
                                            <label>Email : </label>
                                            <input readonly class="form-control" name="Email" value="<?php echo $mahasiswa->Email ?>">
                                    </div>
                                    <div class="form-group" style="width: 30%; float: right">
                                            <label>No. Telfon : </label>
                                            <input readonly class="form-control" name="Telfon" value="<?php echo $mahasiswa->Telfon ?>">
                                    </div>
                                    <div class="form-group">
                                            <label>Alamat : </label>
                                            <textarea readonly class="form-control" name="Alamat"><?php echo $mahasiswa->Alamat ?></textarea>
                                    </div>
                                </div>
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