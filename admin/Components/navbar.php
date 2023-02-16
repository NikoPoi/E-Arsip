<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="./dashboard.php" style="text-decoration: none !important;">
            <div class="d-flex align-items-center">
                <img src="./assets/images/cloud-logo.png" alt="Cloud" width="80px" style="height: auto;">&nbsp;&nbsp;&nbsp;<div class="display-6 fw-normal">E - ARSIP</div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="m-auto"></div>
            <ul class="navbar-nav d-flex align-items-center mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" aria-current="page" href="./dashboard.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" href="./input-surat-masuk.php">Surat Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" href="./input-surat-keluar.php">Surat Keluar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" href="./input-surat-disposisi.php">Surat Disposisi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link h6 text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['username'] ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a onclick="return confirm('Apakah anda Ingin Log Out??')" class="dropdown-item" href="backend/logout.php">LOG OUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>