<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetTanahModel extends Model
{
    protected $table = 'aset_tanah';

    public function getAsetTanahJoin()
    {
        return $this->select('asets.*, aset_tanah.*')
                    ->join('asets', 'asets.id_aset = aset_tanah.id_aset')
                    ->where('asets.deleted_at', null)
                    ->findAll();
    }

    public function getDetailById($id)
    {
        return $this->select('asets.*, aset_tanah.*')
                    ->join('asets', 'asets.id_aset = aset_tanah.id_aset')
                    ->where('asets.id_aset', $id)
                    ->where('asets.deleted_at', null)
                    ->first();
    }
}
