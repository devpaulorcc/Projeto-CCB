<?php

namespace App\Models;

use CodeIgniter\Model;

class EnderecoModel extends Model
{
    protected $table            = 'endereco';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_usuario",
        "cep",
        "rua",
        "bairro",
        "cidade"
    ];

    protected bool $allowEmptyInserts = true;
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

    public function CadastrarEnd($cep, $rua, $bairro, $cidade){

        $db = \Config\Database::connect();
        $dados = [
            "id_usuario" => $db->insertID(),
            "cep" => $cep,
            "rua" => $rua,
            "bairro" => $bairro,
            "cidade" => $cidade
        ];

        $retorno = $this->insert($dados);

        if($retorno){
            return true;
        }else{
            return false;
        }

    }

}
