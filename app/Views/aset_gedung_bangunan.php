<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Aset Gedung & Bangunan</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
      padding: 100px 20px 40px 20px; /* biar kebawah dikit */
      text-align: center;
      background-color: #eaf4f7;
    }

    .hero h1 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .table-container {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    /* Sticky header tabel */
    .table thead th {
      position: sticky;
      top: 0;
      background-color: #174a6f;
      color: white;
      z-index: 1;
    }
  </style>
</head>

<body>

  <div class="header">
    <?= $this->include('templates/header'); ?>
  </div>

  <div class="hero">
    <div class="hero-content">
      <h1>Data Aset Gedung dan Bangunan</h1>
      <p>Informasi lengkap mengenai aset gedung dan bangunan di Desa Karangtengah.</p>
    </div>
  </div>

  <div class="container mt-4">
    <?php if (empty($aset_gedung)): ?>
      <div class="alert alert-warning text-center" role="alert">
        ⚠️ Tidak ada data aset gedung & bangunan yang ditemukan.
      </div>
    <?php else: ?>
      <div class="table-container">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Nama Aset</th>
                <th>Kode Aset</th>
                <th>NUP Aset</th>
                <th>Tahun Pengadaan</th>
                <th>Perolehan</th>
              </tr>
            </thead>

            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($aset_gedung as $aset): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= esc($aset['nama_aset'] ?? 'Nama tidak tersedia') ?></td>
                  <td><?= esc($aset['kode_aset'] ?? '-') ?></td>
                  <td><?= esc($aset['nup_aset'] ?? '-') ?></td>
                  <td><?= esc($aset['tahun_pengadaan'] ?? '-') ?></td>
                  <td><?= esc($aset['perolehan'] ?? '-') ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <div class="footer">
    <?= $this->include('templates/footer'); ?>
  </div>

</body>
</html>
