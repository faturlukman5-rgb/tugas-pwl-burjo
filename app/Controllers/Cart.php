<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cart extends BaseController
{
    public function index()
    {
        $cart = session()->get('cart') ?? [];

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['harga'] * $item['qty'];
        }

        return view('cart/index', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    // INSERT (tambah ke cart)
    public function insert()
    {
        $cart = session()->get('cart') ?? [];

        $id = $this->request->getPost('id');

        if (isset($cart[$id])) {
            $cart[$id]['qty'] += 1;
        } else {
            $cart[$id] = [
                'id'    => $id,
                'nama'  => $this->request->getPost('nama_menu'),
                'harga' => $this->request->getPost('harga'),
                'qty'   => 1
            ];
        }

        session()->set('cart', $cart);

        return redirect()->to('/cart');
    }

    // UPDATE QTY
    public function update($id)
    {
        $cart = session()->get('cart') ?? [];

        $qty = $this->request->getPost('qty');

        if (isset($cart[$id])) {
            $cart[$id]['qty'] = $qty;
        }

        session()->set('cart', $cart);

        return redirect()->to('/cart');
    }

    // REMOVE 1 ITEM
    public function remove($id)
    {
        $cart = session()->get('cart') ?? [];

        unset($cart[$id]);

        session()->set('cart', $cart);

        return redirect()->to('/cart');
    }

    // DESTROY CART
    public function destroy()
    {
        session()->remove('cart');

        return redirect()->to('/cart');
    }
}