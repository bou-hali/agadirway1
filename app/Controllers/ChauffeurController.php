<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ChauffeurController extends Controller
{
    protected $chauffeurModel;

    public function __construct()
    {
        $this->chauffeurModel = new \App\Models\ChauffeurModel();
    }

    public function index()
    {
        $data['chauffeurs'] = $this->chauffeurModel->findAll();
        return view('admin/chauffeurs/index', $data);
    }

    public function create()
    {
        return view('admin/chauffeurs/create');
    }

    public function store()
    {
        $newData = [
            'nom'          => $this->request->getPost('nom'),
            'prenom'       => $this->request->getPost('prenom'),
            'numTelephone' => $this->request->getPost('numTelephone'),
            'email'        => $this->request->getPost('email'),
            'permis'       => $this->request->getPost('permis'),
        ];

        $db = \Config\Database::connect();
        $query = $db->table('chauffeur')->insert($newData);

        if ($query) {
            return redirect()->to('/admin/chauffeurs')->with('success', 'Chauffeur added successfully.');
        } else {
            return redirect()->to('/admin/chauffeurs')->with('error', 'Failed to add chauffeur.');
        }
    }

    public function edit($id)
    {
        $data['chauffeur'] = $this->chauffeurModel->find($id);
        return view('admin/chauffeurs/edit', $data);
    }

    public function update($id)
    {
        $db = \Config\Database::connect();
        $updatedData = [
            'nom'          => $this->request->getPost('nom'),
            'prenom'       => $this->request->getPost('prenom'),
            'numTelephone' => $this->request->getPost('numTelephone'),
            'email'        => $this->request->getPost('email'),
            'permis'       => $this->request->getPost('permis'),
        ];

        $query = $db->table('chauffeur')->where('id', $id)->update($updatedData);

        if ($query) {
            return redirect()->to('/admin/chauffeurs')->with('success', 'Chauffeur updated successfully.');
        } else {
            return redirect()->to('/admin/chauffeurs')->with('error', 'Failed to update chauffeur.');
        }
    }

    public function delete($id)
    {
        $db = \Config\Database::connect();
        $query = $db->table('chauffeur')->where('id', $id)->delete();

        if ($query) {
            return redirect()->to('/admin/chauffeurs')->with('success', 'Chauffeur deleted successfully.');
        } else {
            return redirect()->to('/admin/chauffeurs')->with('error', 'Failed to delete chauffeur.');
        }
    }
}
