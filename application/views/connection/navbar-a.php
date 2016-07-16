        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/lapgas/admin">Lapgas Informatika Unla - Admin Page</a>
            </div>

            <br><br>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/admin/e_dashboard"><i class="fa fa-edit fa-fw"></i> Edit Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Mahasiswa<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/admin/a_mahasiswa"><i class="fa fa-plus fa-fw"></i> Tambah Mahasiswa</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/admin/filter_mahasiswa"><i class="fa fa-users fa-fw"></i> Daftar Mahasiswa</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-university fa-fw"></i> Akademik<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/admin/a_matkul"><i class="fa fa-plus fa-fw"></i> Tambah Mata Kuliah</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/admin/l_matkul"><i class="fa fa-book fa-fw"></i> Daftar Mata Kuliah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-balance-scale fa-fw"></i> Pembayaran<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/admin/pre_a_bayar"><i class="fa fa-plus fa-fw"></i> Tambah Data Pembayaran</a>
                                </li>
                                <li>
                                    <a href="http://localhost/lapgas/admin/filter_bayar"><i class="fa fa-money fa-fw"></i> Log Pembayaran</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('Nama');?><span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/lapgas/admin/cp/<?php echo $this->session->userdata('kode');?>"><i class="fa fa-edit fa-fw"></i> Ganti Password</a>
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