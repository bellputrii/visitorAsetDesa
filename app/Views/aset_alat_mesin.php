<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset Alat & Mesin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 20vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: black;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .card {
     background: linear-gradient(135deg, #206789, #98D2C0); /* Dari biru tua ke hijau toska */
     border-radius: 12px;
     box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
     padding: 20px;
     transition: transform 0.3s ease, box-shadow 0.3s ease;
     color: white;
     }

     .card:hover {
     transform: translateY(-5px);
     box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
     background: linear-gradient(135deg, #174A6F, #78C5AD); /* Biru lebih gelap ke hijau lebih cerah */
     }

     .card h3 {
     font-size: 20px;
     font-weight: bold;
     margin-bottom: 10px;
     }

     .card p {
     font-size: 14px;
     margin: 5px 0;
     color: #fff;
     }
    </style>
</head>
<body>
     <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Data Aset Peralatan dan Mesin</h1>
            <p>Informasi lengkap mengenai aset tanah di Desa Karangtengah.</p>
        </div>
    </div>

    <div class="container">
        <?php if (empty($aset_alat_mesin)): ?>
            <p style="color: red;">⚠️ Tidak ada data aset alat & mesin yang ditemukan.</p>
        <?php else: ?>
            <div class="grid">
                <?php foreach ($aset_alat_mesin as $aset): ?>
                    <div class="card">
                        <h3><?= esc($aset['nama_aset'] ?? 'Nama tidak tersedia') ?></h3>
                        <p><strong>Kode Aset:</strong> <?= esc($aset['kode_aset'] ?? 'N/A') ?></p>
                        <p><strong>NUP Aset:</strong> <?= esc($aset['nup_aset'] ?? 'N/A') ?></p>
                        <p><strong>Kategori:</strong> <?= esc($aset['kategori_aset'] ?? 'Tidak diketahui') ?></p>
                        <p><strong>Tahun Pengadaan:</strong> <?= esc($aset['tahun_pengadaan'] ?? 'N/A') ?></p>
                        <p><strong>Merk:</strong> <?= esc($aset['merk'] ?? 'Tidak tersedia') ?></p>
                        <p><strong>Bahan:</strong> <?= esc($aset['bahan'] ?? 'Tidak tersedia') ?></p>
                        <p><strong>Perolehan:</strong> <?= esc($aset['perolehan'] ?? 'Tidak tersedia') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
