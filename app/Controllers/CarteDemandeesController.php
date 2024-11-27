<?php

namespace App\Controllers;

use App\Models\CarteDemandeesModel;

class CarteDemandeesController extends BaseController
{
    protected $carteDemandeesModel;

    public function __construct()
    {
        $this->carteDemandeesModel = new CarteDemandeesModel();
    }

    public function index()
    {
        // Retrieve all records from the table
        $data['cartes'] = $this->carteDemandeesModel->findAll();

        // Load the view and pass the data
        return view('admin/carte/index', $data);
    }
}
