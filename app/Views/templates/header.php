<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "SIMA | Desa Karangtengah"; ?></title>

    <!-- Bootstrap & Animate CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Google Font (Optional) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <style>
        /* Navbar styling */
        .navbar-custom {
            transition: all 0.4s ease-in-out;
            background: #ffffff; /* Warna putih untuk tampilan lebih bersih */
            padding: 10px 0;
        }

        .navbar-scrolled {
            background: #ffffff !important;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-size: 22px;
            font-weight: bold;
            color: #206789 !important; /* Warna biru tua dari logo */
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        /* Tulisan SIMA */
        .sima-text {
            font-size: 26px;
            font-weight: 700;
            color: #206789;
            letter-spacing: 1px;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-shadow: 1px 1px 3px rgba(32, 103, 137, 0.2);
            transition: all 0.3s ease;
        }

        .navbar-brand:hover .sima-text {
            color: #174f6e;
            text-shadow: 1px 1px 5px rgba(32, 103, 137, 0.4);
        }

        /* Warna teks navbar */
        .nav-link {
            font-weight: 500;
            color: black !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: rgba(32, 87, 129, 0.6) !important;
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
<nav class="fixed-top navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo">
            <span class="sima-text">SIMA</span>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Aset Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_tanah'); ?>">Aset Tanah</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_alat_mesin'); ?>">Aset Peralatan & Mesin</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/aset_gedung_bangunan'); ?>">Aset Gedung & Bangunan</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar scroll effect -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownToggle = document.getElementById('navbarDropdown');
        const dropdownMenu = dropdownToggle.nextElementSibling;

        dropdownToggle.addEventListener('click', function (e) {
            e.preventDefault();

            // Toggle class show pada dropdown-menu
            dropdownMenu.classList.toggle('show');
        });

        // Menutup dropdown jika klik di luar area dropdown
        document.addEventListener('click', function (event) {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
</script>

</body>
</html>
