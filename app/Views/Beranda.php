<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Desa Karangtengah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('<?php echo base_url('assets/images/hero-bg.jpg'); ?>') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(32, 87, 129, 0.6);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
        }
        .hero-content h1 {
            font-size: 2.8rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }
        .hero-content p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-top: 10px;
            color: #DFF6F0;
        }
        .btn {
            display: inline-block;
            background: #4F959D;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 1.1rem;
            margin-top: 15px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn:hover {
            background: #3a7a81;
        }
        .content-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            background: #f5f5f5;
        }
        .content-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            width: 100%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content-text {
            flex: 1;
            padding: 20px;
        }
        .content-image {
            flex: 1;
        }
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
            }
            .content-text, .content-image {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Selamat Datang di Sistem Manajemen Aset Desa Karangtengah</h1>
            <p>Sistem ini membantu organisasi dalam memantau aset, memperbarui informasi secara berkala, memaksimalkan pemanfaatan aset, serta mengurangi risiko kehilangan atau kerusakan.</p>
            <a href="<?php echo base_url('aset_desa'); ?>" class="btn">Lihat Aset Desa</a>
        </div>
    </div>
    <div class="content-section">
        <div class="content-container">
            <div class="content-text">
                <h2>Tentang Desa Karangtengah</h2>
                <p>Desa Karangtengah adalah salah satu desa di Kecamatan Batur, Kabupaten Banjarnegara, yang terletak di kawasan Dataran Tinggi Dieng.</p>
                <p>Desa ini terbagi menjadi tiga dusun: Karangtengah, Pawuhan, dan Simpangan. Mayoritas penduduk bekerja sebagai petani dengan komoditas utama berupa kentang, kubis, bawang daun, dan kacang Dieng.</p>
            </div>
            <div class="content-image">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url('assets/images/karangtengah1.jpg'); ?>" class="d-block w-100" alt="Desa Karangtengah 1">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/images/karangtengah1.jpg'); ?>" class="d-block w-100" alt="Desa Karangtengah 2">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/images/karangtengah1.jpg'); ?>" class="d-block w-100" alt="Desa Karangtengah 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
