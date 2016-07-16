        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/lapgas/mahasiswa">Lapgas Informatika Unla - Mahasiswa</a>
            </div>

            <br><br>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                                                
                        <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i> <?php echo $this->session->userdata('Nama');?><span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/mahasiswa/profile/<?php echo $this->session->userdata('NPM');?>"><i class="fa fa-user fa-fw"></i> profile</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/mahasiswa/l_nilai/<?php echo $this->session->userdata('NPM');?>"><i class="fa fa-folder-open fa-fw"></i> Nilai Praktikum</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/mahasiswa/cp/<?php echo $this->session->userdata('NPM');?>"><i class="fa fa-edit fa-fw"></i> Ganti Password</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/login/doLogout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>