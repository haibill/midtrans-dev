<?php $this->load->view('layout/header') ?>

<body class="app sidebar-mini sidenav-toggled rtl">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="#" data-toggle="sidebar" aria-label="Hide Sidebar" style="font-size: 18px;">Midtrans X CodeIgniter</a>

        <!-- Sidebar toggle button-->
        <!-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> -->
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li style="float: right;">
                <!-- Version Template UI -->
                <span class="badge badge-danger">midtrans</span>
                <span class="badge badge-success">0.0.4</span>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fas fa-user fa-lg"></i>&nbsp;&nbsp; Galang </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <?php $this->load->view('layout/menu') ?>
    <main class="app-content">
        <?php echo $contents; ?>
    </main>
    <?php $this->load->view('layout/footer') ?>
</body>

</html>