<?php

namespace App\Models;

use CodeIgniter\Model;

class Nr10Model extends Model
{
    protected $table            = 'nr10';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_usuario', 'data_inicio', 'data_venc', 'data_recicla'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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

    public function CadastrarNR10($data_inicio, $data_venc, $data_recicla){

        $db = \Config\Database::connect();

        $dados = [
         "id_usuario" => $db->insertID(),
         "data_inicio" => $data_inicio,
         "data_venc" => $data_venc,
         "data_recicla" => $data_recicla
        ];

        $retorno = $this->insert($dados);

        if($retorno){
            return true;
        }
        else{
            return false;
        }
    }
}
