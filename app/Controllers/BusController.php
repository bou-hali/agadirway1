<?php

namespace App\Controllers;

use App\Models\BusModel;

class BusController extends BaseController
{
    protected $busModel;

    public function __construct()
    {
        $this->busModel = new BusModel();
    }

    // READ: List all buses
    public function index()
    {
        $data['buses'] = $this->busModel->findAll();
        return view('admin/buses/index', $data);
    }

    // CREATE: Show the form to add a bus
    public function create()
    {
        return view('admin/buses/create');
    }

    // STORE: Save the new bus to the database
    public function store()
    {
        if (!$this->validate($this->busModel->validationRules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->busModel->save([
            'numero'   => $this->request->getPost('numero'),
            'marque'   => $this->request->getPost('marque'),
            'capacite' => $this->request->getPost('capacite'),
        ]);

        return redirect()->to('/admin/buses')->with('success', 'Bus added successfully.');
    }

    // EDIT: Show the form to edit a bus
    public function edit($id)
    {
        $data['bus'] = $this->busModel->find($id);
        if (!$data['bus']) {
            return redirect()->to('/admin/buses')->with('error', 'Bus not found.');
        }
        return view('admin/buses/edit', $data);
    }

    // UPDATE: Update the bus in the database
    public function update($id)
    {
        $db = \Config\Database::connect();
    
        // Prepare data for the update
        $updatedData = [
            'numero'   => $this->request->getPost('numero'),
            'marque'   => $this->request->getPost('marque'),
            'capacite' => $this->request->getPost('capacite'),
        ];
    
        // Debug: Log the data to be updated
        log_message('debug', "Attempting to update Bus ID {$id} with data: " . print_r($updatedData, true));
    
        // Execute the update using a raw query
        $query = $db->table('bus')
                    ->where('id', $id)
                    ->update($updatedData);
    
        // Check if the query was successful
        if ($query) {
            log_message('debug', "Raw query successful for Bus ID {$id}.");
            return redirect()->to('/admin/buses')->with('success', 'Bus updated successfully.');
        } else {
            log_message('error', "Raw query failed for Bus ID {$id}.");
            return redirect()->to('/admin/buses')->with('error', 'Failed to update bus.');
        }
    }
    
    
    

    // DELETE: Delete a bus from the database
    public function delete($id)
    {
        $this->busModel->delete($id);
        return redirect()->to('/admin/buses')->with('success', 'Bus deleted successfully.');
    }
}
