<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pelanggan;

    public function __construct()
    {
        $this->pelanggan = new PelangganModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $pelanggan = $this->pelanggan
                ->like('nama', $keyword)
                ->orLike('telepon', $keyword)
                ->findAll();
        } else {
            $pelanggan = $this->pelanggan->findAll();
        }

        $data = [
            'title'      => 'Data Pelanggan',
            'pelanggan'  => $pelanggan,
            'keyword'    => $keyword
        ];

        return view('pelanggan/index', $data);
    }

    public function create()
    {
        return view('pelanggan/create');
    }

    public function store()
    {
        $this->pelanggan->insert([
            'nama'      => $this->request->getPost('nama'),
            'alamat'    => $this->request->getPost('alamat'),
            'telepon'   => $this->request->getPost('telepon')
        ]);

        return redirect()->to('/pelanggan')
            ->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title'      => 'Edit Pelanggan',
            'pelanggan'  => $this->pelanggan->find($id)
        ];

        return view('pelanggan/edit', $data);
    }

    public function update($id)
    {
        $this->pelanggan->update($id, [
            'nama'      => $this->request->getPost('nama'),
            'alamat'    => $this->request->getPost('alamat'),
            'telepon'   => $this->request->getPost('telepon')
        ]);

        return redirect()->to('/pelanggan')
            ->with('success', 'Data pelanggan berhasil diubah.');
    }

    public function delete($id)
    {
        $this->pelanggan->delete($id);

        return redirect()->to('/pelanggan')
            ->with('success', 'Data pelanggan berhasil dihapus.');
    }
}