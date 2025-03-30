<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetModel extends Model
{
    protected $table = 'asets';
    protected $primaryKey = 'id_aset';
    protected $allowedFields = [
        'id_aset', 'kode_aset', 'nama_aset', 'nup_aset',
        'kategori_aset', 'tahun_pengadaan', 'qr_code'
    ];

    // Mengambil semua aset
    public function getAllAset()
    {
        return $this->findAll();
    }

    // Mengambil aset berdasarkan ID
    public function getAsetById($id)
    {
        return $this->where('id_aset', $id)->first();
    }

    // Mengambil detail aset berdasarkan kategorinya
    public function getDetailAset($id)
    {
        $aset = $this->getAsetById($id);
        if (!$aset) {
            return null;
        }

        // Menentukan model berdasarkan kategori aset
        $detailModel = null;
        switch ($aset['kategori_aset']) {
            case 'Gedung & Bangunan':
                $detailModel = new \App\Models\AsetGedungBangunanModel();
                break;
            case 'Peralatan & Mesin':
                $detailModel = new \App\Models\AsetPeralatanMesinModel();
                break;
            case 'Tanah':
                $detailModel = new \App\Models\AsetTanahModel();
                break;
        }

        // Jika ada model detail, gabungkan data utama dan detailnya
        if ($detailModel) {
            $detail = $detailModel->where('id_aset', $id)->first();
            return array_merge($aset, $detail ? $detail : []);
        }

        return $aset;
    }
}
?>