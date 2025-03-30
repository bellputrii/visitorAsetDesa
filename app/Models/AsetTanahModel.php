<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetTanahModel extends Model
{
    protected $table = 'aset_tanah';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = [
        'id_aset', 'luas', 'alamat', 'kegunaan', 'latitude', 'longitude',
        'harga_satuan', 'harga_total', 'harga_sewa_satuan', 'harga_sewa_total',
        'jarak_sumber_air', 'jarak_jalan_utama', 'foto'
    ];
}
