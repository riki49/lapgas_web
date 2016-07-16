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
                            <a href="http://localhost/lapgas/cetak/cetakRecap2/<?php echo $_POST['date_1']?>/<?php echo $_POST['date_2']?>/<?php echo $_POST['additional']?>">
                                <i class="fa fa-print fa-fw"></i> Data Pembayaran Informatika Periode : <?php echo $_POST['date_1']. " - " .$_POST['date_2'] ?>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;vertical-align:middle">NO</th>                                            
                                            <th style="text-align:center;vertical-align:middle">Tanggal</th>
                                            <th style="text-align:center;vertical-align:middle">NPM</th>
                                            <th style="text-align:center;vertical-align:middle">Nama</th>
                                            <th style="text-align:center;vertical-align:middle">Kode Bayar</th>
                                            <th style="text-align:center;vertical-align:middle">Matakuliah</th>                                            
                                            <th style="text-align:center;vertical-align:middle">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        <?php foreach($Pembayaran as $bayar) { ?>
                                        

                                        <tr class="odd gradeX">                                            
                                            <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $bayar->tgl_bayar; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $bayar->NPM; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $bayar->Nama_mhs; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $bayar->Kode; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $bayar->Nama_mk; ?></td>                        
                                            

                                            <td style="text-align:center;vertical-align:middle;background-color: #5cb85c">
                                                <a href="http://localhost/lapgas/admin/detail_bayar/<?php echo $bayar->NPM; ?>" style="text-decoration:none;color: #fff">
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

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->