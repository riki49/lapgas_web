<?php $this->load->view('connection/form') ?>
<div id="wrapper">
        <?php $this->load->view('connection/navbar-a') ?>

        <div id="page-wrapper" style="background-image:url('<?php echo base_url().'assets/';?>img/back.png');background-repeat:no-repeat;background-position:bottom right">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH DATA PEMBAYARAN PRAKTEK</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12" style="background-color:transparent">
                    <div class="panel panel-default" style="background-color:transparent">
                        <div class="panel-heading">
                            Data Pembayaran
                        </div>
                        <div class="panel-body" style="background-color:transparent">
                            <form action="" method="post">
                                <div class="row">                                
                                    <div class="col-lg-3">
                                        <div class="form-group">                                                                                                                  
                                            <label>Angkatan : </label><br>                                            
                                            <select class="form-control" name="Angkatan">
                                                <option value="----">----</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>                                                
                                            </select>
                                        </div>                                                                                
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">                                                                                                                                            
                                            <label>Kelas : </label><br>                                          
                                            <input type="radio" name="Kelas" id="optionsRadiosInline1" value="A1" > A1 
                                            &nbsp&nbsp
                                            <input type="radio" name="Kelas" id="optionsRadiosInline1" value="A2" > A2                                             
                                            &nbsp&nbsp
                                            <input type="radio" name="Kelas" id="optionsRadiosInline1" value="B" > B
                                        </div>
                                    </div>                                
                                </div> 
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <center>
                                                <button type="submit" class="btn btn-default">CARI DATA</button>
                                                <button type="reset" class="btn btn-default">RESET DATA</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>                       
                            </form>
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