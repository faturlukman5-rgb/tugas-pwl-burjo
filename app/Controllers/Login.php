<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();

        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi form
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            return redirect()->to('/login')
                ->withInput()
                ->with('error', 'Username dan Password wajib diisi.');
        }

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {

            // Cek password hash
            if (password_verify($password, $user['password'])) {

                $session->set([
                    'id_user'  => $user['id'],
                    'nama'     => $user['nama'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);

                return redirect()->to('/');

            } else {

                return redirect()->to('/login')
                    ->with('error', 'Password salah.');

            }

        } else {

            return redirect()->to('/login')
                ->with('error', 'Username tidak ditemukan.');

        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}