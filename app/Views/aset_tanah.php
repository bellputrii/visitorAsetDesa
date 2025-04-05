<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Data Aset Tanah</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"/>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #206789;
      color: white;
      padding: 10px 0;
      text-align: center;
    }

    .hero {
      padding: 150px 20px 40px 20px; /* biar kebawah dikit */
      text-align: center;
      background-color: #eaf4f7;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    .hero h1 {
      font-size: 36px;
      font-weight: bold;
    }

    .hero p {
      font-size: 16px;
      color:rgb(22, 22, 22);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      color: #333;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
    }

    .card h3 {
      font-size: 20px;
      font-weight: bold;
      color: #206789;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      margin: 5px 0;
      color: #555;
    }

    .card a {
      display: inline-block;
      margin-top: 12px;
      padding: 8px 14px;
      background-color: #206789;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      font-weight: bold;
    }

    .card a:hover {
      background-color: #174a6f;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <?= $this->include('templates/header'); ?>

  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-content">
      <div>
        <h1>Data Aset Tanah</h1>
        <p>Informasi lengkap mengenai aset tanah di Desa Karangtengah.</p>
      </div>
    </div>
  </div>

  <!-- Konten Utama -->
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

  
  
  <!-- Footer -->
  <?= $this->include('templates/footer'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
