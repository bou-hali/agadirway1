<?php

namespace App\Models;

use CodeIgniter\Model;

class TrajetStationModel extends Model
{
    protected $table            = 'trajet_station';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['trajet_id', 'station_id', 'ordre_passage'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'trajet_id'      => 'required|integer|is_not_unique[trajet.id]',
        'station_id'     => 'required|integer|is_not_unique[station.id]',
        'ordre_passage'  => 'required|integer|greater_than_equal_to[1]',
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
     * Retrieve stations for a specific trajet in order.
     *
     * @param int $trajet_id
     * @return array
     */
    public function getStationsByTrajet($trajet_id)
    {
        return $this->db->table('trajet_station ts')
            ->select('station.nom, station.adresse, ts.ordre_passage')
            ->join('station', 'ts.station_id = station.id', 'left')
            ->where('ts.trajet_id', $trajet_id)
            ->orderBy('ts.ordre_passage', 'ASC')
            ->get()
            ->getResultArray();
    }
}
