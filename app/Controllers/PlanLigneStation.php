<?php

namespace App\Controllers;

use App\Models\StationModel;
use App\Models\TrajetModel;
use App\Models\TrajetStationModel;
use App\Models\BusModel;
use CodeIgniter\Controller;

class PlanLigneStation extends BaseController
{
    /**
     * Display the Plan Ligne & Station page.
     */
    public function index()
    {
        // Instantiate Models
        $stationModel = new StationModel();
        $trajetModel = new TrajetModel();
        $trajetStationModel = new TrajetStationModel();
        $busModel = new BusModel();

        // Fetch all stations
        $stations = $stationModel->findAll();

        // Fetch all trajets with associated bus information
        $trajets = $trajetModel->getAllTrajetsWithDetails();

        // For each trajet, fetch its associated stations
        foreach ($trajets as &$trajet) {
            $trajet['stations'] = $trajetStationModel->getStationsByTrajet($trajet['trajet_id']);
        }

        // Prepare data for the view
        $data = [
            'stations' => $stations,
            'trajets' => $trajets,
        ];

        // Load the view with data
        return view('plan_ligne_station', $data);
    }
}
