<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasInputModel;

class KelasInput extends BaseController
{
    private $model;
    

    public function __construct()
    {
        $this->model = new KelasInputModel;
    }

    public function index()
    {
        $data['title'] = 'kelola Admin';
        $data['data_admin'] = $this->model->tampilkan_data();

        return view('admin/index', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Admin';

        if (isset($_POST['submit']))
        {
            $validasi = [
                'username' => [
                    'rules' => 'min_length[5]|max_length[50]|is_unique[admin.Username]',
                    'errors' => [
                        'min_length' => 'Username minimal 5 karakter!',
                        'max_length' => 'Username maksimal 50 karakter!',
                        'is_unique' => 'Username yang ditambahkan, telah digunakan!'
                    ]
                ],
                'password' => [
                    'rules' => 'min_length[3]|max_length[30]',
                    'errors' => [
                        'min_length' => 'Nama minimal 3 dan maksimal 30 karakter',
                        'max_length' => 'Nama minimal 3 dan maksimal 30 karakter',
                    ]
                ]
            ];

            $error = false;
            $error_val = [];

            if (!$this->validate($validasi))
            {
                $error = true;
                $error_val = $this->validator->getErrors();
            }


            if ($error)
                return redirect()
                    ->to(site_url('admin/tambah'))
                    ->with('error_val', $error_val)
                    ->withInput();


            // Tambah data ke tabel `admin`
            $this->model->tambah_data([
                'Username' => $this->request->getVar('username'),
                'Password' => $this->request->getVar('password'),
                'Status' => $this->request->getVar('status')
            ]);
        
            if ($this->model->db->affectedRows() > 0)
                return redirect()
                    ->to(site_url('admin'))
                    ->with('msg_success', 'Data berhasil ditambahkan');

            return redirect()
                ->to(site_url('admin/tambah'))
                ->with('msg_error', 'Data gagal ditambahkan');
        }

        return view('admin/tambah', $data);
    }

    public function sunting($id)
    {
        $data['title'] = 'Edit Kelas';
        $data['fetch_data'] = $this->model->fetch_data($id);

        // Update data
        if ($this->request->getPost('submit') == 'ya')
        {
            $validasi = [
                'username' => [
                    'rules' => 'min_length[5]|max_length[20]',
                    'errors' => [
                        'min_length' => 'Username minimal 5 karakter!',
                        'max_length' => 'Username maksimal 20 karakter!'
                    ]
                ]
            ];

            $error = false;
            $error_val = [];

            if (!$this->validate($validasi))
            {
                $error = true;
                $error_val = $this->validator->getErrors();
            }


            if ($error)
                return redirect()
                    ->to(site_url('admin/sunting/'.$id))
                    ->with('error_val', $error_val)
                    ->withInput();


            $update_data = $this->model->edit_data([
                'id' => $id,
                'Username' => $this->request->getVar('username')
            ]);


            if ($update_data)
                return redirect()
                    ->to(site_url('admin'))
                    ->with('msg_success', 'Berhasil menyimpan data NRP');

            return redirect()
                ->to(site_url('admin/sunting/'.$id))
                ->with('msg_error', 'Data gagal ditambahkan');
        }

        return view('admin/sunting', $data);
    }


    public function hapus()
    {
        if ($this->request->getPost('hapus_data') == 'ya')
        {
            $id = $this->request->getVar('id_disable');


            $disable_data = $this->model->disable_data([
                'id' => $id,
                'Status' => $this->request->getVar('Status')
            ]);


            if ($disable_data)
                return redirect()
                    ->to(site_url('admin'))
                    ->with('msg_success', 'Akses berhasil dihapus');


            return redirect()
                ->to(site_url('admin'))
                ->with('msg_error', 'Akses gagal dihapus');
        }
    }
}
