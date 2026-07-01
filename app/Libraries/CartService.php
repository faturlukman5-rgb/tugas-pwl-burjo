<?php

namespace App\Libraries;

class CartService
{
    protected $session;
    protected $cartKey = 'cart';

    public function __construct()
    {
        $this->session = session();
    }

    // Ambil semua isi cart
    public function contents()
    {
        return $this->session->get($this->cartKey) ?? [];
    }

    // INSERT item ke cart
    public function insert($item)
    {
        $cart = $this->contents();

        $id = $item['id'];

        if (isset($cart[$id])) {
            // kalau sudah ada, tambah qty
            $cart[$id]['qty'] += $item['qty'];
        } else {
            $cart[$id] = $item;
        }

        $this->session->set($this->cartKey, $cart);
    }

    // UPDATE qty
    public function update($id, $qty)
    {
        $cart = $this->contents();

        if (isset($cart[$id])) {
            $cart[$id]['qty'] = $qty;
        }

        $this->session->set($this->cartKey, $cart);
    }

    // REMOVE 1 item
    public function remove($id)
    {
        $cart = $this->contents();

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        $this->session->set($this->cartKey, $cart);
    }

    // DESTROY cart
    public function destroy()
    {
        $this->session->remove($this->cartKey);
    }

    // TOTAL harga
    public function total()
    {
        $cart = $this->contents();
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        return $total;
    }

    // TOTAL item
    public function totalItems()
    {
        $cart = $this->contents();
        return count($cart);
    }
}