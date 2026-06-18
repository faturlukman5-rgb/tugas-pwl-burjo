<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();

        $data = [
            'title' => 'Dashboard',

            // Total semua menu
            'totalMenu' => $menuModel->countAll(),

            // Total makanan
            'totalMakanan' => (new MenuModel())
                ->where('kategori', 'Makanan')
                ->countAllResults(),

            // Total minuman
            'totalMinuman' => (new MenuModel())
                ->where('kategori', 'Minuman')
                ->countAllResults(),

            // Total stok
            'totalStok' => (new MenuModel())
                ->selectSum('stok')
                ->first()['stok']
        ];

        return view('dashboard/index', $data);
    }
}