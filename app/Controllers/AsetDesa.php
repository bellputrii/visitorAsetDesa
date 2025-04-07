<?php

namespace App\Controllers;

use App\Models\AsetModel;
use CodeIgniter\Controller;
use App\Models\AsetTanahModel;
use App\Models\AsetPeralatanMesinModel;
use App\Models\AsetGedungBangunanModel;

class AsetDesa extends Controller
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

    public function index()
    {
        $data['aset'] = $this->asetModel->getAllAset();

        return view('templates/header')
            . view('aset_desa', $data)
            . view('templates/footer');
    }

    // public function tanah()
    // {
    //     // Cek apakah model bekerja dengan baik
    //     $data['aset_tanah'] = $this->tanahModel->findAll();

    //     // Debugging: Cek apakah data ada atau tidak
    //     if (empty($data['aset_tanah'])) {
    //         return "Data kosong atau model tidak berfungsi!";
    //     }

    //     return view('aset_tanah', $data);
    // }

    // public function detail_tanah($id_aset)
    // {
    //     // Ambil data aset tanah berdasarkan ID
    //     $aset = $this->tanahModel->where('id_aset', $id_aset)->first();

    //     // Jika aset tidak ditemukan, redirect ke daftar aset dengan pesan error
    //     if (!$aset) {
    //         return redirect()->to('/aset_tanah')->with('error', 'Aset tidak ditemukan!');
    //     }

    //     // Tampilkan halaman detail
    //     return view('detail_tanah', ['aset' => $aset]);
    // }
    
    public function tanah()
    {
        $data['aset_tanah'] = $this->tanahModel->getAsetTanahJoin();
    
        return view('aset_tanah', $data);
    }
    
    public function detail_tanah($id_aset)
    {
        $aset = $this->tanahModel->getDetailById($id_aset);
    
        if (!$aset) {
            return redirect()->to('/aset_tanah')->with('error', 'Aset tidak ditemukan!');
        }
    
        return view('detail_tanah', ['aset' => $aset]);
    }
    
    public function gedung()
    {
        $data['aset_gedung'] = $this->gedungModel->getAsetGedungJoin();
    
        return view('aset_gedung_bangunan', $data);
    }



    // public function gedung()
    // {
    //     $asetModel = new \App\Models\AsetModel();
    //     $detailModel = new \App\Models\AsetGedungBangunanModel();
    
    //     $asets = $asetModel->where('kategori_aset', 'Gedung & Bangunan')->findAll();
    
    //     foreach ($asets as &$aset) {
    //         $detail = $detailModel->where('id_aset', $aset['id_aset'])->first();
    //         $aset['detail'] = $detail;
    //     }
    
    //     $data['aset_gedung'] = $asets;
    
    //     return view('aset_gedung_bangunan', $data);
    // }
    


    // public function asetAlatMesin()
    // {
    //     $model = new AsetModel();
    //     $detailModel = new \App\Models\AsetPeralatanMesinModel();
    
    //     $asets = $model->where('kategori_aset', 'Peralatan & Mesin')->findAll();
    
    //     // Loop buat nyisipin detail
    //     foreach ($asets as &$aset) {
    //         $detail = $detailModel->where('id_aset', $aset['id_aset'])->first();
    //         $aset['detail'] = $detail;
    //     }
    
    //     $data['aset_alat_mesin'] = $asets;
    
    //     return view('aset_alat_mesin', $data);
    // }
    
    public function asetAlatMesin()
    {
        $data['aset_alat_mesin'] = $this->mesinModel->getAsetAlatMesinJoin();
    
        return view('aset_alat_mesin', $data);
    }


    // public function detail_gedung($id_aset)
    // {
    //     // Ambil data aset gedung berdasarkan ID
    //     $aset = $this->gedungModel->where('id_aset', $id_aset)->first();

    //     // Jika aset tidak ditemukan, redirect ke daftar aset dengan pesan error
    //     if (!$aset) {
    //         return redirect()->to('/aset_gedung_bangunan')->with('error', 'Aset tidak ditemukan!');
    //     }

    //     // Tampilkan halaman detail gedung
    //     return view('detail_gedung_bangunan', ['aset' => $aset]);
    // }


    public function detailAset($id_aset)
    {
        $aset = $this->asetModel->getAsetById($id_aset);

        if (!$aset) {
            return redirect()->to('/')->with('error', 'Aset tidak ditemukan!');
        }

        switch ($aset['kategori_aset']) {
            case 'Tanah':
                $detail = $this->tanahModel->where('id_aset', $id_aset)->first();
                return view('aset_tanah', ['aset' => $aset, 'detail' => $detail]);
            case 'Peralatan & Mesin':
                $detail = $this->mesinModel->where('id_aset', $id_aset)->first();
                return view('aset_alat_mesin', ['aset' => $aset, 'detail' => $detail]);
            case 'Gedung & Bangunan':
                $detail = $this->gedungModel->where('id_aset', $id_aset)->first();
                return view('aset_gedung', ['aset' => $aset, 'detail' => $detail]);
            default:
                return redirect()->to('/')->with('error', 'Kategori aset tidak dikenali!');
        }
    }
}