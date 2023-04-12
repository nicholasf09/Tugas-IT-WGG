<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidasiModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'ID';
    protected $returnType       = 'object';

    public function cek_user($username, $password)
    {
        return $this
            ->where('Username', $username)
            ->where('Password', $password)
            ->first();
    }
}

?>