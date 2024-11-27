<?php

namespace App\Models;

use CodeIgniter\Model;

class ChauffeurModel extends Model
{
    protected $table            = 'chauffeur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nom', 'prenom', 'numTelephone', 'email', 'permis'];

    // Optional: Add validation rules if needed
    protected $validationRules = [
        'nom'          => 'required|min_length[2]|max_length[50]',
        'prenom'       => 'required|min_length[2]|max_length[50]',
        'numTelephone' => 'required|numeric',
        'email'        => 'required|valid_email',
        'permis'       => 'required|min_length[5]|max_length[20]',
    ];

    protected $validationMessages = [];
    protected $skipValidation = false;
}
