<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();

        $stok = $menuModel->selectSum('stok')->first();

        $data = [
            'title'         => 'Dashboard',
            'totalMenu'     => $menuModel->countAll(),
            'totalMakanan'  => $menuModel->where('kategori', 'Makanan')->countAllResults(),
            'totalMinuman'  => $menuModel->where('kategori', 'Minuman')->countAllResults(),
            'totalStok'     => $stok['stok'] ?? 0
        ];

        return view('dashboard/index', $data);
    }
}