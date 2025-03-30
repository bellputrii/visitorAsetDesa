<?php echo view('templates/header'); ?>

<div class="container mt-5">
    <div class="card mt-4 shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header text-white text-center" style="background: linear-gradient(135deg, #007bff, #00b4db);">
            <h3 class="fw-bold mb-0">Detail Aset</h3>
        </div>
        <div class="card-body p-4">
            <table class="table table-bordered table-hover align-middle">
                <tr>
                    <th class="bg-light">Kode Aset</th>
                    <td><?= esc($aset['kode_aset']) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Nama Aset</th>
                    <td><?= esc($aset['nama_aset']) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Kategori</th>
                    <td><?= esc($aset['kategori_aset']) ?></td>
                </tr>
                <tr>
                    <th class="bg-light">Tahun Pengadaan</th>
                    <td><?= esc($aset['tahun_pengadaan']) ?></td>
                </tr>
            </table>

            <?php if ($aset['kategori_aset'] === 'Tanah' && $detail): ?>
                <h4 class="mt-4 text-success border-bottom pb-2">Detail Tanah</h4>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Luas:</strong> <?= esc($detail['luas']) ?> m²</li>
                    <li class="list-group-item"><strong>Alamat:</strong> <?= esc($detail['alamat']) ?></li>
                    <li class="list-group-item"><strong>Kegunaan:</strong> <?= esc($detail['kegunaan']) ?></li>
                    <li class="list-group-item"><strong>Harga Total:</strong> Rp<?= number_format($detail['harga_total'], 0, ',', '.') ?></li>
                    <li class="list-group-item text-center">
                        <img src="/uploads/<?= esc($detail['foto']) ?>" alt="Foto Aset" class="img-fluid rounded-3 shadow-sm" width="350">
                    </li>
                </ul>
            <?php endif; ?>

            <?php if ($aset['kategori_aset'] === 'Peralatan & Mesin' && $detail): ?>
                <h4 class="mt-4 text-warning border-bottom pb-2">Detail Peralatan & Mesin</h4>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Merk:</strong> <?= esc($detail['merk']) ?></li>
                    <li class="list-group-item"><strong>Bahan:</strong> <?= esc($detail['bahan']) ?></li>
                    <li class="list-group-item"><strong>Perolehan:</strong> <?= esc($detail['perolehan']) ?> unit</li>
                </ul>
            <?php endif; ?>

            <?php if ($aset['kategori_aset'] === 'Gedung & Bangunan' && $detail): ?>
                <h4 class="mt-4 text-danger border-bottom pb-2">Detail Gedung & Bangunan</h4>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Perolehan:</strong> <?= esc($detail['perolehan']) ?> unit</li>
                </ul>
            <?php endif; ?>

            <div class="text-center mt-4">
                <a href="<?= base_url('/aset_desa') ?>" class="btn btn-lg fw-bold shadow-lg btn-hover" style="background-color: #4F959D; color: white; border-radius: 30px; padding: 12px 30px;">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Aset
                </a>
            </div>
        </div>
    </div>
</div>

<?php echo view('templates/footer'); ?>
