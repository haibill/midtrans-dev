<!-- Sidebar menu-->
<div class="app-sidebar__overlay" id="sidebar" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?= base_url('/assets/img/8.jpg') ?>" alt="User Image" width="50">
        <div>
            <p class="app-sidebar__user-name">Galang</p>
            <p class="app-sidebar__user-designation">Admin</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= site_url('Dashboard') ?>"><i class="app-menu__icon fas fa-chalkboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-layer-group"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= site_url('coa') ?>">
                        Chart of Account</a></li>
                <li><a class="treeview-item" href="<?= site_url('Grade') ?>"> Grade</a></li>
                <li><a class="treeview-item" href="<?= site_url('Majors') ?>"> Majors</a></li>
                <li><a class="treeview-item" href="<?= site_url('HomeroomTeacher') ?>"> Homeroom Teacher</a></li>
                <li><a class="treeview-item" href="<?= site_url('Student') ?>"> Student</a></li>
                <li><a class="treeview-item" href="<?= site_url('Semester') ?>"> Semester</a></li>
                <li><a class="treeview-item" href="<?= site_url('AcademicYear') ?>"> Academic Year</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-file-invoice-dollar "></i><span class="app-menu__label">Transaction</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= site_url('ClassName') ?>"> Class Name</a>
                <li><a class="treeview-item" href="<?= site_url('#') ?>"> Grouping Student Class</a>
                </li>
                <li><a class="treeview-item" href="<?= site_url('#') ?>"> Semester Schedule</a></li>
                <li><a class="treeview-item" href="<?= site_url('#') ?>"> Cash Receipt</a></li>
            </ul>
        </li>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pen-alt"></i><span class="app-menu__label">Report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= site_url('JurnalUmum') ?>"> General Journal</a></li>
                <li><a class="treeview-item" href="<?= site_url('BukuBesar') ?>"> Ledger (Buku Besar)</a></li>
                <!-- <li><a class="treeview-item" href=""> Analisis ABC</a></li> -->
            </ul>
        </li>
    </ul>
</aside>