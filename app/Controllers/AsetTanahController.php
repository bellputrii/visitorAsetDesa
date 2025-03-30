<?php

namespace App\Controllers;

use App\Models\AsetTanahModel;
use CodeIgniter\Controller;

class AsetTanahController extends Controller
{
    protected $tanahModel;

    public function __construct()
    {
        $this->tanahModel = new AsetTanahModel();
    }

    public function index()
    {
        $data['aset_tanah'] = $this->tanahModel->findAll(); // Mengambil semua aset tanah
        return view('aset_tanah', $data);
    }

    public function detail($id_aset)
    {
        // Ambil data aset berdasarkan id_aset
        $data['detail'] = $this->tanahModel->where('id_aset', $id_aset)->first();

        if (!$data['detail']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Aset Tanah tidak ditemukan.");
        }

        return view('detail_tanah', $data);
    }
}
