<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'nama',
        'alamat',
        'telepon'
    ];

    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}