<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aset Tanah</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 20px;
          padding: 0;
          background-color: #f4f4f4;
          }

          .container {
          max-width: 800px;
          margin: auto;
          padding: 20px;
          background: linear-gradient(135deg, #206789, #98D2C0); /* Gradasi biru tua ke hijau toska */
          border-radius: 12px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          color: white;
          }

          h1 {
          text-align: center;
          color: white;
          }

          .info {
          margin: 15px 0;
          font-size: 16px;
          }

          .info strong {
          color: #FDD835; /* Kuning keemasan untuk kontras */
          }

          .map-container {
          width: 100%;
          height: 300px;
          margin-top: 20px;
          border-radius: 8px;
          overflow: hidden;
          border: 2px solid white; /* Bingkai putih agar lebih estetik */
          }

          .btn-back {
          display: block;
          text-align: center;
          margin-top: 20px;
          padding: 10px;
          background: #FDD835; /* Kuning keemasan */
          color: #333;
          text-decoration: none;
          border-radius: 5px;
          font-weight: bold;
          }

          .btn-back:hover {
          background: #FFC107; /* Kuning yang lebih terang */
          }

    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Aset Tanah</h1>
        <div class="info"><strong>ID Aset:</strong> <?= esc($aset['id_aset'] ?? '-') ?></div>
        <div class="info"><strong>Alamat:</strong> <?= esc($aset['alamat'] ?? '-') ?></div>
        <div class="info"><strong>Luas:</strong> <?= esc($aset['luas'] ?? '-') ?> m²</div>
        <div class="info"><strong>Kegunaan:</strong> <?= esc($aset['kegunaan'] ?? '-') ?></div>
        <div class="info"><strong>Harga Satuan:</strong> Rp <?= number_format($aset['harga_satuan'] ?? 0, 0, ',', '.') ?></div>
        <div class="info"><strong>Harga Total:</strong> Rp <?= number_format($aset['harga_total'] ?? 0, 0, ',', '.') ?></div>
        <div class="info"><strong>Harga Sewa Satuan:</strong> Rp <?= number_format($aset['harga_sewa_satuan'] ?? 0, 0, ',', '.') ?></div>
        <div class="info"><strong>Harga Sewa Total:</strong> Rp <?= number_format($aset['harga_sewa_total'] ?? 0, 0, ',', '.') ?></div>
        <div class="info"><strong>Jarak ke Sumber Air:</strong> <?= esc($aset['jarak_sumber_air'] ?? '-') ?> meter</div>
        <div class="info"><strong>Jarak ke Jalan Utama:</strong> <?= esc($aset['jarak_jalan_utama'] ?? '-') ?> meter</div>

        <?php if (!empty($aset['latitude']) && !empty($aset['longitude'])): ?>
            <div class="info"><strong>Lokasi:</strong> <?= esc($aset['latitude']) ?>, <?= esc($aset['longitude']) ?></div>
            <div id="map" class="map-container"></div>
        <?php else: ?>
            <p style="color: red;">Lokasi tidak tersedia</p>
        <?php endif; ?>

        <?php if (!empty($aset['foto'])): ?>
            <div class="info">
                <strong>Foto Aset:</strong><br>
                <img src="<?= base_url('uploads/' . $aset['foto']) ?>" alt="Foto Aset" style="max-width: 100%; height: auto; border-radius: 8px;">
            </div>
        <?php endif; ?>

        <a href="<?= base_url('aset_tanah') ?>" class="btn-back">Kembali ke Daftar Aset</a>
    </div>

    <script>
        function initMap() {
            var latitude = <?= esc($aset['latitude'] ?? 0) ?>;
            var longitude = <?= esc($aset['longitude'] ?? 0) ?>;
            var mapOptions = {
                center: { lat: latitude, lng: longitude },
                zoom: 15
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: { lat: latitude, lng: longitude },
                map: map,
                title: "Lokasi Aset"
            });
        }

        <?php if (!empty($aset['latitude']) && !empty($aset['longitude'])): ?>
            window.onload = initMap;
        <?php endif; ?>
    </script>
</body>
</html>
