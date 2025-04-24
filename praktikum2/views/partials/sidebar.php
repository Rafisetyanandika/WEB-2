<?php
$currentPath = $_SERVER['PHP_SELF'];
$fileName = basename($currentPath);
?>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Main Menu</div>
            <a class="nav-link <?= $fileName == 'dashboard.php' ? '' : 'active' ?>" href="list-user.php">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                User
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Rafi
    </div>
</nav>