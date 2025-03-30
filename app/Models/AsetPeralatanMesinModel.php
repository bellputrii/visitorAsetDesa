<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetPeralatanMesinModel extends Model
{
    protected $table = 'aset_peralatan_mesin';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = ['id_aset', 'merk', 'bahan', 'perolehan'];
}
