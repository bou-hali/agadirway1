<?php

namespace App\Models;

use CodeIgniter\Model;

class CarteModel extends Model
{
    protected $table            = 'cartes_demandees';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom', 'email', 'carte', 'message', 'documents'];

    // Désactivez les timestamps
    protected $useTimestamps    = false;  // Empêche CodeIgniter d'utiliser created_at et updated_at

    // Validation
    protected $validationRules  = [
        'nom'   => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'carte' => 'required',
    ];
}
