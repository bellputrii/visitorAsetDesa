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
            background: #E3F2FD;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 90vh;
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
            background: rgba(25, 118, 210, 0.7);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }
        .hero-content h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }
        .hero-content p {
            font-size: 1.3rem;
            line-height: 1.6;
            margin-top: 10px;
            color: #DFF6F0;
        }
        .btn-primary {
            background: #1565C0;
            border: none;
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #0D47A1;
        }
        .content-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            background: white;
        }
        .content-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1100px;
            width: 100%;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .content-text {
            flex: 1;
            padding: 20px;
        }
        .content-text h2 {
            color: #1565C0;
        }
        .content-image {
            flex: 1;
            text-align: center;
        }
        .content-image img {
            width: 100%;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Selamat Datang di Desa Karangtengah</h1>
            <p>Jelajahi sistem manajemen aset desa yang inovatif dan transparan untuk meningkatkan kesejahteraan masyarakat.</p>
            <a href="<?php echo base_url('aset_desa'); ?>" class="btn btn-primary">Lihat Aset Desa</a>
        </div>
    </div>
    <div class="content-section">
        <div class="content-container">
            <div class="content-text">
                <h2>Mengenal Desa Karangtengah</h2>
                <p>Desa Karangtengah terletak di dataran tinggi Dieng, Kabupaten Banjarnegara, dengan keindahan alam yang memukau dan potensi pertanian yang unggul.</p>
                <p>Mayoritas penduduknya bekerja sebagai petani dengan hasil utama berupa kentang, kubis, dan bawang daun, menjadikan desa ini sebagai salah satu pusat pertanian di daerah Dieng.</p>
            </div>
            <div class="content-image">
                <img src="<?php echo base_url('assets/images/karangtengah1.jpg'); ?>" alt="Desa Karangtengah">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
