<?php

namespace App\Controllers;

use App\Models\AsetModel;
use App\Models\AsetTanahModel;
use App\Models\AsetPeralatanMesinModel;
use App\Models\AsetGedungBangunanModel;

class AsetController extends BaseController
{
    protected $asetModel;
    protected $tanahModel;
    protected $mesinModel;
    protected $gedungModel;

    public function __construct()
    {
        $this->asetModel = new AsetModel();
        $this->tanahModel = new AsetTanahModel();
        $this->mesinModel = new AsetPeralatanMesinModel();
        $this->gedungModel = new AsetGedungBangunanModel();
    }

    public function detailAset($id_aset)
{
    $aset = $this->asetModel->getAsetById($id_aset);

    if (!$aset) {
        return redirect()->to('/aset_desa')->with('error', 'Aset tidak ditemukan!');
    }

    $detail = [];
    $view = 'detail_aset'; // Default view

    if ($aset['kategori_aset'] === 'Tanah') {
        $detail = $this->tanahModel->where('id_aset', $id_aset)->first();
        $view = 'detail_tanah'; // View khusus untuk tanah
    } elseif ($aset['kategori_aset'] === 'Peralatan & Mesin') {
        $detail = $this->mesinModel->where('id_aset', $id_aset)->first();
        $view = 'detail_mesin';
    } elseif ($aset['kategori_aset'] === 'Gedung & Bangunan') {
        $detail = $this->gedungModel->where('id_aset', $id_aset)->first();
        $view = 'detail_gedung';
    }

    return view($view, [
        'aset' => $aset,
        'detail' => $detail
    ]);
}

}
