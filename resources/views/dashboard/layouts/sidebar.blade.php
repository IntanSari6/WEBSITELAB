<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <div class="sidebar-brand">
            <a href="/">LabKom</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">LK</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a class="nav-link {{ Request::is('Inventaris') ? 'active' : '' }}" href="/Inventaris"><i
                        class="fas fa-columns"></i> <span>Inventaris Lab</span></a>
            </li>

            <li class="dropdown">
                <a class="nav-link {{ Request::is('requestLoans') ? 'active' : '' }}" href="/requestLoans"><i
                        class="fas fa-columns"></i> <span>Request Peminjaman</span></a>
            </li>

            <li class="dropdown">
                <a href="Jadwal_Peminjaman"><i class="fas fa-th-large"></i> <span>Jadwal Peminjaman</span></a>
            </li>

            <li class="menu-header">Administrator</li>

            <li class="dropdown">
                <a href="/manage_lab_inventory"><i class="fas fa-columns"></i> <span>Kelola Inventaris Lab</span></a>
            </li>

            <li class="dropdown">
                <a href="/manage_loans"><i class="far fa-file-alt"></i> <span>Kelola Peminjaman</span></a>
            </li>

            <li class="dropdown">
                <a href="/manage_schedule"><i class="fas fa-th-large"></i> <span>Kelola Jadwal Lab</span></a>
            </li>
</div>
