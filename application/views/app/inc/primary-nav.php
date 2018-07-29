<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="<?php echo base_url() ?>app/dashboard">ADMIN</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?php echo base_url() ?>assets/joli/img/boy.png" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php echo base_url() ?>assets/joli/img/boy.png" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?php echo $nama_usr; ?></div>
                    <div class="profile-data-title"><?php echo $prodi; ?></div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li class="active">
            <a href="<?php echo base_url() ?>app/dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Profile</span></a>
            <ul>
                <li><a href="pages-gallery.html"><span class="fa fa-pencil-square-o"></span> Tambah User</a></li>
                <li><a href="<?php echo base_url() ?>app/user"><span class="fa fa-users"></span> Lihat Daftar User</a></li>
            </ul>
        </li>

    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->
