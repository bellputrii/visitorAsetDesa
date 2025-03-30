<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetGedungBangunanModel extends Model
{
    protected $table = 'aset_gedung_bangunan';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = ['id_aset', 'perolehan'];
}
