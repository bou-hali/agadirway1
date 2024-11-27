<?php

namespace App\Models;

use CodeIgniter\Model;

class CarteDemandeesModel extends Model
{
    protected $table = 'cartes_demandees'; // Table name
    protected $primaryKey = 'id';         // Primary key

    // Allowed fields for mass assignment
    protected $allowedFields = [
        'nom', 
        'email', 
        'carte', 
        'message', 
        'documents', 
        'created_at'
    ];

    // Automatically handle created_at timestamps
    protected $useTimestamps = true;

    // Specify fields for automatic timestamps (if applicable)
    protected $createdField  = 'created_at';
    protected $updatedField  = null; // Set to null if no updated_at field

    // Validation rules for fields (optional)
    protected $validationRules = [
        'nom'       => 'required|min_length[2]|max_length[255]',
        'email'     => 'required|valid_email|max_length[255]',
        'carte'     => 'required|max_length[255]',
        'message'   => 'permit_empty|max_length[1000]',
        'documents' => 'permit_empty|max_length[255]'
    ];

    protected $validationMessages = []; // Custom validation messages (optional)
    protected $skipValidation = false; // Whether to skip validation
}
