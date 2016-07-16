<?php $this->load->view('connection/table') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIST DATA MAHASISWA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo "Angkatan : ".$_POST['Angkatan']. " - Kelas : " .$_POST['Kelas']?>
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
                                            <th style="text-align:center;vertical-align:middle">Gender</th>
                                            <th style="text-align:center;vertical-align:middle">-</th>
                                            <th style="text-align:center;vertical-align:middle">-</th>
                                            <th style="text-align:center;vertical-align:middle">-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        <?php foreach($Mahasiswa as $mhs){ ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mhs->NPM; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mhs->Nama; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mhs->Gender; ?></td>

                                            <td style="text-align:center;vertical-align:middle;background-color: #5cb85c" width="10%">
                                                <a href="http://localhost/lapgas/admin/detail_bayar/<?php echo $mhs->NPM ?>" style="text-decoration:none;color:#fff">
                                                    Detail <i class="fa fa-user fa-fw"></i>
                                                </a>
                                            </td>

                                            <td style="text-align:center;vertical-align:middle;background-color: #5bc0de" width="10%">
                                                <a href="http://localhost/lapgas/admin/e_mahasiswa/<?php echo $mhs->NPM ?>" style="text-decoration:none;color:#fff" onclick="return confirm('Edit Data ?')">
                                                    EDIT <i class="fa fa-edit fa-fw"></i>
                                                </a>
                                            </td>

                                            <td style="text-align:center;vertical-align:middle;background-color: #d9534f" width="10%">
                                                <a href="http://localhost/lapgas/admin/d_mahasiswa/<?php echo $mhs->NPM; ?>" style="text-decoration:none;color:#fff" onclick="return confirm('Hapus Data ?')">
                                                    DELETE <i class="fa fa-remove fa-fw"></i>
                                                </a>
                                            </td>
                                        </tr> 
                                        <?php $no=$no+1 ?>
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