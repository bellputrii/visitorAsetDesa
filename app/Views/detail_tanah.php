<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Aset Tanah</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      padding: 100px 20px 40px 20px;
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
      color: #333;
    }

    h1 {
      text-align: center;
      color: #206789;
      font-size: 32px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      font-size: 14px;
    }

    th {
      background-color: #f0f6f9;
      color: #206789;
      font-weight: bold;
    }

    .map-container {
      width: 100%;
      height: 300px;
      margin-top: 20px;
      border-radius: 8px;
      overflow: hidden;
      border: 2px solid #206789;
    }

    .btn-back {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 16px;
      background: #206789;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 14px;
      transition: background 0.3s ease;
    }

    .btn-back:hover {
      background: #174a6f;
    }

    .info img {
      margin-top: 10px;
      border-radius: 8px;
      border: 2px solid #206789;
      max-width: 100%;
      height: auto;
    }

    .info strong {
      color: #206789;
    }
  </style>
</head>
<body>
    
  <!-- Header -->
  <?= $this->include('templates/header'); ?>

  <div class="container">
    <div class="card">
      <h1>Detail Aset Tanah</h1>

      <table>
        <tr><th>ID Aset</th><td><?= esc($aset['id_aset'] ?? '-') ?></td></tr>
        <tr><th>Alamat</th><td><?= esc($aset['alamat'] ?? '-') ?></td></tr>
        <tr><th>Luas</th><td><?= esc($aset['luas'] ?? '-') ?> m²</td></tr>
        <tr><th>Kegunaan</th><td><?= esc($aset['kegunaan'] ?? '-') ?></td></tr>
        <tr><th>Harga Satuan</th><td>Rp <?= number_format($aset['harga_satuan'] ?? 0, 0, ',', '.') ?></td></tr>
        <tr><th>Harga Total</th><td>Rp <?= number_format($aset['harga_total'] ?? 0, 0, ',', '.') ?></td></tr>
        <tr><th>Harga Sewa Satuan</th><td>Rp <?= number_format($aset['harga_sewa_satuan'] ?? 0, 0, ',', '.') ?></td></tr>
        <tr><th>Harga Sewa Total</th><td>Rp <?= number_format($aset['harga_sewa_total'] ?? 0, 0, ',', '.') ?></td></tr>
        <tr><th>Jarak ke Sumber Air</th><td><?= esc($aset['jarak_sumber_air'] ?? '-') ?> meter</td></tr>
        <tr><th>Jarak ke Jalan Utama</th><td><?= esc($aset['jarak_jalan_utama'] ?? '-') ?> meter</td></tr>
        <?php if (!empty($aset['latitude']) && !empty($aset['longitude'])): ?>
          <tr><th>Koordinat</th><td><?= esc($aset['latitude']) ?>, <?= esc($aset['longitude']) ?></td></tr>
        <?php endif; ?>
      </table>

      <?php if (!empty($aset['foto'])): ?>
        <div class="info">
          <strong>Foto Aset:</strong><br>
          <img src="<?= base_url('uploads/' . $aset['foto']) ?>" alt="Foto Aset">
        </div>
      <?php endif; ?>

      <?php if (!empty($aset['latitude']) && !empty($aset['longitude'])): ?>
        <div id="map" class="map-container"></div>
      <?php else: ?>
        <p style="color: #206789; margin-top: 10px;">Lokasi tidak tersedia</p>
      <?php endif; ?>

      <a href="<?= base_url('aset_tanah') ?>" class="btn-back">Kembali ke Daftar Aset</a>
    </div>
  </div>

  <!-- Footer -->
  <?= $this->include('templates/footer'); ?>

  <!-- Leaflet Map Script -->
  <script>
    <?php if (!empty($aset['latitude']) && !empty($aset['longitude'])): ?>
      document.addEventListener("DOMContentLoaded", function () {
        var latitude = <?= esc($aset['latitude']) ?>;
        var longitude = <?= esc($aset['longitude']) ?>;

        var map = L.map('map').setView([latitude, longitude], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
        .bindPopup('<?= esc($aset['alamat'] ?? 'Alamat tidak tersedia') ?>')
          .openPopup();
      });
    <?php endif; ?>
  </script>
</body>
</html>
