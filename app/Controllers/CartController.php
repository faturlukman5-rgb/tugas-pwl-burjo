<?php

namespace App\Controllers;

use App\Libraries\CartService;
use App\Models\MenuModel;

class CartController extends BaseController
{
    protected $cart;
    protected $menu;

    public function __construct()
    {
        $this->cart = new CartService();
        $this->menu = new MenuModel();
    }

    // tampil cart
    public function index()
    {
        $data = [
            'cart' => $this->cart->contents(),
            'total' => $this->cart->total()
        ];

        return view('cart/index', $data);
    }

    // tambah ke cart
    public function add($id)
    {
        $menu = $this->menu->find($id);

        $this->cart->insert([
            'id'    => $menu['id'],
            'name'  => $menu['nama_menu'],
            'price' => $menu['harga'],
            'qty'   => 1
        ]);

        return redirect()->to('/cart');
    }

    // update qty
    public function update($id)
    {
        $qty = $this->request->getPost('qty');

        $this->cart->update($id, $qty);

        return redirect()->to('/cart');
    }

    // hapus item
    public function remove($id)
    {
        $this->cart->remove($id);

        return redirect()->to('/cart');
    }

    // kosongkan cart
    public function clear()
    {
        $this->cart->destroy();

        return redirect()->to('/cart');
    }
}