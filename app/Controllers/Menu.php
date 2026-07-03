<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menu;

    public function __construct()
    {
        $this->menu = new MenuModel();
    }

   public function index()
{
    $keyword = $this->request->getGet('keyword');

    if ($keyword) {
        $menu = $this->menu
            ->like('nama_menu', $keyword)
            ->orLike('kategori', $keyword)
            ->findAll();
    } else {
        $menu = $this->menu->findAll();
    }

    $totalMenu = count($menu);

    $makanan = 0;
    $minuman = 0;
    $totalStok = 0;

    foreach ($menu as $m) {
        if ($m['kategori'] == 'Makanan') {
            $makanan++;
        }

        if ($m['kategori'] == 'Minuman') {
            $minuman++;
        }

        $totalStok += $m['stok'];
    }

    $data = [
        'menu'       => $menu,
        'totalMenu'  => $totalMenu,
        'makanan'    => $makanan,
        'minuman'    => $minuman,
        'totalStok'  => $totalStok,
        'keyword'    => $keyword
    ];

    return view('menu/index', $data);
}
    public function create()
    {
        return view('menu/create');
    }
public function store()
{
    $foto = $this->request->getFile('foto');
    

    $namaFoto = null;

    if ($foto && $foto->isValid() && !$foto->hasMoved()) {
        $namaFoto = $foto->getRandomName();
        $foto->move(FCPATH . 'uploads', $namaFoto);
    }

    $data = [
        'nama_menu' => $this->request->getPost('nama_menu'),
        'kategori'  => $this->request->getPost('kategori'),
        'harga'     => $this->request->getPost('harga'),
        'stok'      => $this->request->getPost('stok'),
        'foto'      => $namaFoto
    ];

    $this->menu->insert($data);

    return redirect()->to('/menu');
}

    public function edit($id)
    {
        $data['menu'] = $this->menu->find($id);
        return view('menu/edit', $data);
    }

    public function update($id)
    {
        $this->menu->update($id, [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok')
        ]);

        return redirect()->to('/menu');
    }

    public function delete($id)
{
    if ($this->menu->find($id)) {
        $this->menu->delete($id);
    }

    return redirect()->to('/menu')
        ->with('success', 'Menu berhasil dihapus.');
}

public function pdf()
{
    $data['menu'] = $this->menu->findAll();

    $html = view('menu/pdf', $data);

    $dompdf = new Dompdf();

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

  $dompdf->render();

header('Content-Type: application/pdf');
echo $dompdf->output();
exit;
}

}