<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .body {
        padding-top: 80px; /* Sesuaikan nilai ini dengan tinggi header */
            }

        .h2 {
                margin-top: 20px; /* Tambahkan margin atas jika masih terlalu dekat */
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 180px;
            object-fit: cover;
        }
        .card-body {
            text-align: center;
        }
        .btn-explore {
            background-color: #6c5ce7;
            color: white;
            border-radius: 10px;
            padding: 8px 15px;
            font-weight: bold;
        }
        .btn-explore:hover {
            background-color: #5a4bcf;
        }
        .rating {
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Data Aset Desa</h2>
        <div class="row">
            <?php foreach ($aset as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- <img src="<?= !empty($item['gambar']) ? base_url('uploads/' . $item['gambar']) : base_url('uploads/default.jpg'); ?>" class="card-img-top" alt="Gambar Aset"> -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nama_aset']; ?></h5>
                            <p class="card-text">
                                <span class="rating">⭐ ⭐ ⭐ ⭐ ☆</span> <!-- Dummy rating -->
                                <br>
                                <strong>Kode:</strong> <?php echo $item['kode_aset']; ?><br>
                                <strong>NUP:</strong> <?php echo $item['nup_aset']; ?><br>
                                <strong>Kategori:</strong> <?php echo $item['kategori_aset']; ?><br>
                                <strong>Tahun:</strong> <?php echo $item['tahun_pengadaan']; ?><br>
                            </p>
                            <a href="<?= base_url('aset_desa/detail_aset/' . $item['id_aset']) ?>" class="btn btn-explore">Explore More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
