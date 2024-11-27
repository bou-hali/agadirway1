<?php
// app/Controllers/TrajetController.php

namespace App\Controllers;

use App\Models\TrajetModel;
use App\Models\StationModel;
use CodeIgniter\Controller;

class TrajetController extends Controller
{
    public function rechercherTrajet()
    {
        $request = service('request');

        // Validate input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'station_depart'  => 'required|integer|is_not_unique[station.id]',
            'station_arrivee' => 'required|integer|is_not_unique[station.id]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Redirect back with validation errors
            return redirect()->back()->withInput()->with('error', 'Veuillez sélectionner à la fois une station de départ et d\'arrivée valide.');
        }

        $stationDepart = $request->getPost('station_depart');
        $stationArrivee = $request->getPost('station_arrivee');

        $trajetModel = new TrajetModel();
        $stationModel = new StationModel();

        // Fetch trajets between stations with their stations
        $trajets = $trajetModel->getTrajetsEntreStationsWithStations($stationDepart, $stationArrivee);

        // Fetch all stations for the form
        $stations = $stationModel->findAll();

        // Prepare data for the view
        $data = [
            'stations' => $stations,
            'trajets'  => $trajets,
        ];

        if (empty($trajets)) {
            $data['error'] = 'Aucun trajet trouvé pour les stations sélectionnées.';
        }

        return view('welcome_message', $data);
    }

    public function index()
    {
        $trajetModel = new TrajetModel();
        $stationModel = new StationModel();

        // Fetch all stations for the form
        $stations = $stationModel->findAll();

        $data = [
            'stations' => $stations,
            'trajets'  => [], // Initially empty
        ];

        return view('welcome_message', $data);
    }
    public function list()
{
    $trajetModel = new \App\Models\TrajetModel();
    $data['trajets'] = $trajetModel->findAll();
    return view('admin/trajets/index', $data);
}

public function create()
{
    $stationModel = new \App\Models\StationModel();
    $data['stations'] = $stationModel->findAll();
    return view('admin/trajets/create', $data);
}

public function store()
{
    $trajetModel = new \App\Models\TrajetModel();

    $newData = [
        'nom'    => $this->request->getPost('nom'),
        'bus_id' => $this->request->getPost('bus_id'),
    ];

    $db = \Config\Database::connect();
    $query = $db->table('trajet')->insert($newData);

    if ($query) {
        return redirect()->to('/admin/trajets')->with('success', 'Trajet added successfully.');
    } else {
        return redirect()->to('/admin/trajets')->with('error', 'Failed to add trajet.');
    }
}

public function edit($id)
{
    $trajetModel = new \App\Models\TrajetModel();
    $stationModel = new \App\Models\StationModel();
    $data['trajet'] = $trajetModel->find($id);
    $data['stations'] = $stationModel->findAll();
    return view('admin/trajets/edit', $data);
}

public function update($id)
{
    $trajetModel = new \App\Models\TrajetModel();

    $updatedData = [
        'nom'    => $this->request->getPost('nom'),
        'bus_id' => $this->request->getPost('bus_id'),
    ];

    $db = \Config\Database::connect();
    $query = $db->table('trajet')->where('id', $id)->update($updatedData);

    if ($query) {
        return redirect()->to('/admin/trajets')->with('success', 'Trajet updated successfully.');
    } else {
        return redirect()->to('/admin/trajets')->with('error', 'Failed to update trajet.');
    }
}

public function delete($id)
{
    $db = \Config\Database::connect();
    $query = $db->table('trajet')->where('id', $id)->delete();

    if ($query) {
        return redirect()->to('/admin/trajets')->with('success', 'Trajet deleted successfully.');
    } else {
        return redirect()->to('/admin/trajets')->with('error', 'Failed to delete trajet.');
    }
}

}
