<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetGedungBangunanModel extends Model
{
    protected $table = 'aset_gedung_bangunan';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = ['id_aset', 'perolehan'];

    // Ambil semua data join dengan asets
    public function getAsetGedungJoin()
    {
        return $this->select('asets.*, aset_gedung_bangunan.*')
                    ->join('asets', 'asets.id_aset = aset_gedung_bangunan.id_aset')
                    ->where('asets.deleted_at', null)
                    ->findAll();
    }

    // Ambil detail berdasarkan ID
    public function getDetailById($id)
    {
        return $this->select('asets.*, aset_gedung_bangunan.*')
                    ->join('asets', 'asets.id_aset = aset_gedung_bangunan.id_aset')
                    ->where('asets.id_aset', $id)
                    ->where('asets.deleted_at', null)
                    ->first();
    }
}
