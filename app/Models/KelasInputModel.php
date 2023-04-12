<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasInputModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'ID';
    protected $returnType       = 'object';
    protected $allowedFields    = ['ID', 'Username', 'Status', 'Password'];

    public function tampilkan_data()
    {
        return $this
            ->db
            ->table($this->table)
            ->orderBy('ID')
            ->get()
            ->getResult();

        // SELECT * FROM `admin` ORDER BY ID
    }


    public function tambah_data($data)
    {
        return $this->insert($data);
    }

    public function fetch_data($id)
    {
        return $this
            ->where('ID', $id)
            ->first();

        // SELECT * FROM `kelas` WHERE NRP = '$nrp'
    }

    public function edit_data($data)
    {
        return $this
            ->set([
                'Username' => $data['Username'],
            ])
            ->where('ID', $data['id'])
            ->update();
        
        // UPDATE `kelas` SET Nama = '".$data['nama']."', Nilai = 
        // '".$data['nilai']."' WHERE NRP = '".$data['nrp']."'
    }


    public function disable_data($data)
    {
        return $this
            ->set([
                'Status' => $data['Status'],
            ])
            ->where('ID', $data['id'])
            ->update();
            
        // DELETE FROM `kelas` WHERE NRP = '$nrp'
    }
}