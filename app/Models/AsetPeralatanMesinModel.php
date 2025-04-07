<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetPeralatanMesinModel extends Model
{
    protected $table = 'aset_peralatan_mesin';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = ['id_aset', 'merk', 'bahan', 'perolehan'];

    // Ambil semua data join dengan asets
    public function getAsetAlatMesinJoin()
    {
        return $this->select('asets.*, aset_peralatan_mesin.*')
                    ->join('asets', 'asets.id_aset = aset_peralatan_mesin.id_aset')
                    ->where('asets.deleted_at', null)
                    ->findAll();
    }

    // Ambil detail aset berdasarkan ID
    public function getDetailById($id)
    {
        return $this->select('asets.*, aset_peralatan_mesin.*')
                    ->join('asets', 'asets.id_aset = aset_peralatan_mesin.id_aset')
                    ->where('asets.id_aset', $id)
                    ->where('asets.deleted_at', null)
                    ->first();
    }
}
