<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset Tanah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
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

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background: #FDD835;
            color: black;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }
        .card a:hover {
            background: #FFC107;
        }
    </style>
</head>
<body>
     <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Data Aset Tanah</h1>
            <p>Informasi lengkap mengenai aset tanah di Desa Karangtengah.</p>
        </div>
    </div>

    <div class="container">
        <?php if (empty($aset_tanah)): ?>
            <p style="color: red;">⚠️ Tidak ada data aset tanah yang ditemukan.</p>
        <?php else: ?>
            <div class="grid">
                <?php foreach ($aset_tanah as $aset): ?>
                    <div class="card">
                        <h3><?= esc($aset['alamat'] ?? 'Alamat tidak tersedia') ?></h3>
                        <p><strong>Luas:</strong> <?= esc($aset['luas'] ?? 'N/A') ?> m²</p>
                        <p><strong>Harga Satuan:</strong> Rp <?= number_format($aset['harga_satuan'] ?? 0, 0, ',', '.') ?></p>
                        <p><strong>Kegunaan:</strong> <?= esc($aset['kegunaan'] ?? 'Tidak diketahui') ?></p>
                        <a href="<?= base_url('aset_tanah/detail_tanah/' . ($aset['id_aset'] ?? '0')) ?>">
                            Detail Aset
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
