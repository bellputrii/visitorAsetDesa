<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Data Aset Desa KarangTengah</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        /* Navbar transparan saat di posisi atas */
        .navbar-custom {
            transition: all 0.4s ease-in-out;
            background: rgba(32, 87, 129, 0.6); /* Biru tua dari logo */
        }

        /* Saat scroll, background menjadi solid */
        .navbar-scrolled {
            background: rgba(32, 87, 129, 0.9) !important;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Hover efek */
        .nav-link {
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #98D2C0 !important; /* Warna hijau toska dari logo */
        }

        /* Warna teks navbar */
        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        /* Dropdown hover effect */
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" width="160" height="65" class="me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Aset Desa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_tanah'); ?>">Aset Tanah</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_alat_mesin'); ?>">Aset Peralatan dan Mesin</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_gedung_bangunan'); ?>">Aset Gedung dan Bangunan</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Navbar berubah saat scroll
    window.addEventListener("scroll", function () {
        var navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    });
</script>

</body>
</html>
