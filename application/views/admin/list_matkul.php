<?php $this->load->view('connection/table') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LIST DATA MATAKULIAH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Matakuliah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>                                            
                                            <th style="text-align:center">Semester</th>
                                            <th style="text-align:center">Kode</th>
                                            <th style="text-align:center">Nama Matakuliah</th>
                                            <th style="text-align:center">-</th>
                                            <th style="text-align:center">-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($Matakuliah as $mk){ ?>
                                        <tr class="odd gradeX">                                            
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mk->Semester; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mk->Kode_mk; ?></td>
                                            <td style="text-align:center;vertical-align:middle"><?php echo $mk->Nama_mk; ?></td>
                                            <td style="text-align:center;vertical-align:middle;background-color: #5bc0de" width="10%">
                                                <a href="http://localhost/lapgas/admin/e_matkul/<?php echo $mk->Kode_mk ?>" style="text-decoration:none;color: #fff" onclick="return confirm('Edit Data ?')">
                                                    EDIT <i class="fa fa-edit fa-fw"></i>
                                                </a>
                                            </td>
                                            <td style="text-align:center;vertical-align:middle;background-color: #d9534f" width="10%">
                                                <a href="http://localhost/lapgas/admin/d_matkul/<?php echo $mk->Kode_mk; ?>" style="text-decoration:none;color: #fff" onclick="return confirm('Hapus Data ?')">
                                                    DELETE <i class="fa fa-remove fa-fw"></i>
                                                </a>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->