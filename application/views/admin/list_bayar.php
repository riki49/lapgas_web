<?php $this->load->view('connection/table') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIST DATA PEMBAYARAN PRAKTEK</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="http://localhost/lapgas/cetak/cetakRecap1/<?php echo $_POST['Angkatan']?>/<?php echo $_POST['Kelas']?>">
                                <i class="fa fa-print fa-fw"></i> Data Pembayaran Informatika - <?php echo $_POST['Angkatan']. " - " .$_POST['Kelas'] ?>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;vertical-align:middle">NO</th>                                            
                                            <th style="text-align:center;vertical-align:middle">NPM</th>
                                            <th style="text-align:center;vertical-align:middle">Nama</th>
                                            <?php $no=1; 
                                                for ($no;$no<=10;$no++){
                                            ?>
                                                <th style="text-align:center;vertical-align:middle"><?php echo $no ?></th>
                                            <?php } ?>                               
                                            <th style="text-align:center;vertical-align:middle">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        <?php foreach($Mahasiswa as $mhs) { ?>
                                        

                                        <tr class="odd gradeX">                                            
                                            <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mhs->NPM; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mhs->Nama; ?></td>                        
                                            
                                            <?php foreach($Matakuliah as $mk) { ?>
                                                <td style="text-align:center;vertical-align:middle">
                                                    <input hidden value="<?php echo $mk->Kode_mk ?>">
                                                    <?php foreach($Pembayaran as $bayar) { ?>                                                 
                                                        <?php if ($mhs->Nama == $bayar->Nama_mhs and $mk->Nama_mk == $bayar->Nama_mk) { ?>
                                                            ✓
                                                        <?php } ?> 
                                                    <?php } ?> 
                                                </td> 
                                            <?php } ?>

                                            <td style="text-align:center;vertical-align:middle;background-color: #5cb85c">
                                                <a href="http://localhost/lapgas/admin/detail_bayar/<?php echo $mhs->NPM; ?>" style="text-decoration:none;color: #fff">
                                                    Detail <i class="fa fa-user fa-fw"></i>
                                                </a>
                                            </td>                                                                                                  
                                        </tr> 

                                        <?php $no++ ?> 
                                        <?php } ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->  
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                <div class="col-lg-10 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Keterangan :
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <?php $no=1; ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;vertical-align:middle">No</th>
                                            <th style="text-align:center;vertical-align:middle">Kode</th>
                                            <th style="text-align:center;vertical-align:middle">Nama Matakuliah</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Matakuliah as $mk) { ?>
                                            <tr>
                                                <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                                                <td style="text-align:center;vertical-align:middle"><?php echo $mk->Kode_mk ?></td>
                                                <td style="text-align:center;vertical-align:middle"><?php echo $mk->Nama_mk ?></td>  
                                            </tr> 
                                        <?php $no++; } ?>                                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->