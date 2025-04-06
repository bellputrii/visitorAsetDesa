<?= $this->include('templates/header') ?>

<style>
    /* Hero biar gak ketiban header */
    .hero {
        padding: 100px 20px 40px 20px; /* atasnya dibesarin */
        text-align: center;
        background-color: #eaf4f7;
    }

    .hero-content h1 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .table-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    /* Optional: Sticky Header Tabel */
    .table thead th {
        position: sticky;
        top: 0;
        background-color: #174a6f;
        color: #fff;
        z-index: 1;
    }
</style>

<div class="hero">
    <div class="hero-content">
        <h1>Data Aset Peralatan dan Mesin</h1>
        <p>Informasi lengkap mengenai aset peralatan dan mesin di Desa Karangtengah.</p>
    </div>
</div>

<?php if (empty($aset_alat_mesin)): ?>
    <div class="alert alert-warning mt-4 text-center">
        ⚠️ Tidak ada data aset alat & mesin yang ditemukan.
    </div>
<?php else: ?>
    <div class="table-container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Aset</th>
                        <th>Kode Aset</th>
                        <th>NUP Aset</th>
                        <th>Tahun Pengadaan</th>
                        <th>Merk</th>
                        <th>Bahan</th>
                        <th>Perolehan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($aset_alat_mesin as $aset): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($aset['nama_aset'] ?? '-') ?></td>
                            <td><?= esc($aset['kode_aset'] ?? '-') ?></td>
                            <td><?= esc($aset['nup_aset'] ?? '-') ?></td>
                            <td><?= esc($aset['tahun_pengadaan'] ?? '-') ?></td>
                            <td><?= esc($aset['merk'] ?? '-') ?></td>
                            <td><?= esc($aset['bahan'] ?? '-') ?></td>
                            <td><?= esc($aset['perolehan'] ?? '-') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>

<?= $this->include('templates/footer') ?>
