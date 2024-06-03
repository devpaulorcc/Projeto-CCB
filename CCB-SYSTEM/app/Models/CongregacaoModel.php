<?php

namespace App\Models;

use CodeIgniter\Model;

class CongregacaoModel extends Model
{
    protected $table            = 'congregacao';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_usuarios', 'nome_congreg'
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

    public function CadastrarCongre($nomeCongregacao){

        $db = \Config\Database::connect();

        $dados = [
         "id_usuarios" => $db->insertID(),
         "nome_congreg" => $nomeCongregacao
        ];

        $retorno = $this->insert($dados);

        if($retorno){
            return true;
        }
        else{
            return false;
        }
    }

    public function buscarComID($id){
        $resultado = $this->where('id_usuarios', $id)->first();
        if($resultado != null){
            return $resultado;
        } else {
            echo 'Erro ao achar usuário em nossa base de dados.';
        }
    }
}
