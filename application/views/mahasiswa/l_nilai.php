<?php $this->load->view('connection/table') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-m') ?>

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
                            Data Pembayaran Praktek
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                                            
                                            <th style="text-align:center">No</th>
                                            <th style="text-align:center">Kode Matakuliah</th>
                                            <th style="text-align:center">Matakuliah</th>
                                            <th style="text-align:center">Semester</th>                                            
                                            <th style="text-align:center">Nilai</th>     
                                            <th style="text-align:center">Tanggal Pembayaran</th>                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        <?php foreach($Matakuliah as $mk){ ?>
                                        <tr class="odd gradeX">                  
                                            <th style="text-align:center"><?php echo $no ?></th>                          
                                            <td style="text-align:center;vertical-align:center"><?php echo $mk->Kode_mk; ?></td>                          
                                            <td style="text-align:center;vertical-align:center"><?php echo $mk->Nama_mk; ?></td>

                                                    <td style="text-align:center;vertical-align:middle">
                                                        <?php foreach($Pembayaran as $bayar){
                                                            if ($mk->Nama_mk==$bayar->Nama_mk) { 
                                                                echo $bayar->Semester;
                                                                }else{
                                                                echo "";
                                                            } 
                                                        } ?>
                                                    </td>

                                                    <td style="text-align:center;vertical-align:middle">
                                                        <?php foreach($Pembayaran as $bayar){
                                                            if ($mk->Nama_mk==$bayar->Nama_mk) { 
                                                                echo $bayar->Nilai;
                                                                }else{
                                                                echo "";
                                                            } 
                                                        } ?>
                                                    </td>

                                                    <td style="text-align:center;vertical-align:middle">
                                                        <?php foreach($Pembayaran as $bayar){
                                                            if ($mk->Nama_mk==$bayar->Nama_mk) {
                                                                echo $bayar->tgl_bayar;
                                                                }else{
                                                                echo "";
                                                            } 
                                                        } ?>
                                                    </td>
                                        </tr>                                         
                                        <?php $no=$no+1; } ?>                                       
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