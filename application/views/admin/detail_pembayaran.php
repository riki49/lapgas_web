<?php $this->load->view('connection/table') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DETAIL PEMBAYARAN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo '<a href="http://localhost/lapgas/admin/detail_mahasiswa/'.$Mahasiswa->NPM.'"><i class="fa fa-user fa-fw"></i> Profile : '
                            .$Mahasiswa->Nama.'</a>'?>
                            |
                            <?php echo '<a href="http://localhost/lapgas/cetak/cetakRecap3/'.$Mahasiswa->NPM.'"><i class="fa fa-print fa-fw"></i> Cetak : Data Pembayaran</a>'?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                                            
                                            <th style="text-align:center;vertical-align:middle">Sem</th>
                                            <th style="text-align:center;vertical-align:middle">Kode</th>
                                            <th style="text-align:center;vertical-align:middle">Matakuliah</th>                                            
                                            <th style="text-align:center;vertical-align:middle">Nilai</th>                                            
                                            <th style="text-align:center;vertical-align:middle">Pembayaran</th> 
                                            <th style="text-align:center;vertical-align:middle">Status</th>                                            
                                            <th style="text-align:center;vertical-align:middle">-</th>
                                            <th style="text-align:center;vertical-align:middle">-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($Matakuliah as $mk){ ?> 
                                            <tr class="odd gradeX" style="text-align:center;vertical-align:center">                                            
                                                <td style="text-align:center;vertical-align:middle"><?php echo $mk->Semester; ?></td>
                                                <td style="text-align:center;vertical-align:middle"><?php echo $mk->Kode_mk; ?></td>
                                                <td style="text-align:center;vertical-align:middle"><?php echo $mk->Nama_mk; ?></td>   
                                                    
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

                                                    <td style="text-align:center;vertical-align:middle" id="status">
                                                        <?php foreach($Pembayaran as $bayar){
                                                            if ($mk->Nama_mk==$bayar->Nama_mk) { 
                                                                if ($bayar->Status=="1"){
                                                                    echo "A";
                                                                }else if ($bayar->Status=="2"){
                                                                    echo "B";
                                                                }else if ($bayar->Status=="3"){
                                                                    echo "C";
                                                                }else if ($bayar->Status=="4"){
                                                                    echo "D";
                                                                }
                                                            }else{
                                                                echo "";
                                                            } 
                                                        } ?>
                                                    </td>

                                                <td style="text-align:center;vertical-align:middle;background-color: #5bc0de" width="10%">
                                                    <?php foreach($Pembayaran as $bayar){ if ($mk->Nama_mk==$bayar->Nama_mk) { ?>
                                                        <a href="http://localhost/lapgas/admin/pre_e_bayar/<?php echo $Pembayaran_2->NPM ?>/<?php echo $bayar->Kode ?>" style="text-decoration:none;color:#fff" onclick="return confirm('Edit Data ?')">
                                                            EDIT <i class="fa fa-edit fa-fw"></i>
                                                        </a>
                                                    <?php } } ?>

                                                <td style="text-align:center;vertical-align:middle;background-color: #d9534f" width="10%">
                                                    <?php foreach($Pembayaran as $bayar){ if ($mk->Nama_mk==$bayar->Nama_mk) { ?>
                                                        <a href="http://localhost/lapgas/admin/d_bayar/<?php echo $Pembayaran_2->NPM ?>/<?php echo $bayar->Kode ?>" style="text-decoration:none;color:#fff" onclick="return confirm('Hapus Data ?')">
                                                            DELETE <i class="fa fa-remove fa-fw"></i>
                                                        </a>
                                                    <?php } } ?>
                                                </td>
                                            </tr> 
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
                                <table class="table">
                                    <thead>
                                        <tr>                                            
                                            <th style="text-align:center;vertical-align:middle">Kode</th>
                                            <th style="text-align:center;vertical-align:middle">Keterangan</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                         <tr>                                            
                                            <td style="text-align:center;vertical-align:middle">A</td>
                                            <td style="text-align:center;vertical-align:middle">Nilai Keluar Tanpa Kwitansi</td>  
                                        </tr>

                                        <tr>                                            
                                            <td style="text-align:center;vertical-align:middle">B</td>
                                            <td style="text-align:center;vertical-align:middle">Data Sudah Di Arsipkan</td>  
                                        </tr>

                                        <tr>                                            
                                            <td style="text-align:center;vertical-align:middle">C</td>
                                            <td style="text-align:center;vertical-align:middle">Data Baru Di Terima Oleh Lab</td>  
                                        </tr>

                                        <tr>                                            
                                            <td style="text-align:center;vertical-align:middle">D</td>
                                            <td style="text-align:center;vertical-align:middle">Data Telah Di Arsipkan Tapi Nilai Belum Keluar</td>  
                                        </tr> 
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

<!-- <script>document.getElementById('status').style.backgroundColor = 'lightblue'</script> -->