<?php

namespace App\Models;

use CodeIgniter\Model;

class BusModel extends Model
{
    protected $table            = 'bus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['numero', 'marque', 'capacite'];

    // Disable Timestamps
    protected $useTimestamps = false;

    // Validation
    protected $validationRules      = [
        'numero'    => 'required|min_length[3]|max_length[20]|is_unique[bus.numero,id,{id}]',
        'marque'    => 'required|min_length[3]|max_length[50]',
        'capacite'  => 'required|integer|greater_than[0]',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
