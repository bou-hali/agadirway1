<?php
// app/Models/TrajetModel.php

namespace App\Models;

use CodeIgniter\Model;

class TrajetModel extends Model
{
    protected $table            = 'trajet';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom', 'bus_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nom'    => 'required|min_length[3]|max_length[100]',
        'bus_id' => 'required|integer|is_not_unique[bus.id]',
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

    /**
     * Retrieves trajets between two stations with their stations.
     *
     * @param int|null $stationDepart
     * @param int|null $stationArrivee
     * @return array
     */
    public function getTrajetsEntreStationsWithStations($stationDepart, $stationArrivee)
    {
        // Initialize the query
        $builder = $this->select('trajet.id, trajet.nom AS trajet_nom, bus.numero AS bus_numero')
                       ->join('bus', 'trajet.bus_id = bus.id');

        if ($stationDepart && $stationArrivee) {
            $stationDepart = (int) $stationDepart;
            $stationArrivee = (int) $stationArrivee;

            $builder->join('trajet_station ts_depart', 'trajet.id = ts_depart.trajet_id AND ts_depart.station_id = ' . $stationDepart)
                    ->join('trajet_station ts_arrivee', 'trajet.id = ts_arrivee.trajet_id AND ts_arrivee.station_id = ' . $stationArrivee)
                    ->where('ts_depart.ordre_passage < ts_arrivee.ordre_passage');
        }

        // Use DISTINCT to prevent duplicate trajets
        $builder->distinct();

        $trajets = $builder->findAll();

        // For each trajet, fetch its stations
        foreach ($trajets as &$trajet) {
            $trajet['stations'] = $this->getStationsByTrajet($trajet['id']);
        }

        return $trajets;
    }

    /**
     * Retrieves stations for a given trajet ordered by ordre_passage.
     *
     * @param int $trajetId
     * @return array
     */
    private function getStationsByTrajet($trajetId)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('trajet_station ts')
                      ->select('station.nom, ts.ordre_passage')
                      ->join('station', 'ts.station_id = station.id')
                      ->where('ts.trajet_id', $trajetId)
                      ->orderBy('ts.ordre_passage', 'ASC');
        return $builder->get()->getResultArray();
    }

    /**
     * Fetches all trajets with associated bus information.
     *
     * @return array
     */
    public function getAllTrajetsWithDetails()
    {
        return $this->select('trajet.id AS trajet_id, trajet.nom AS trajet_nom, bus.numero AS bus_numero')
                    ->join('bus', 'trajet.bus_id = bus.id')
                    ->findAll();
    }
}
