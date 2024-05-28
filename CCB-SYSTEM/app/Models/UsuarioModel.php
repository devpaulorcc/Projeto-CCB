<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "rg",
        "nome",
        "data_nasc",
        "data_cad",
        "cep",
        "numero",
        "caminho_foto",
        "grupo_trabalho",
        "formacao"
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
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

    public $nome;
    

    public function CadastrarUser($rg, $dataNasc, $numCasa, $nomeVolun, $gpTrabalho, $ftPerfil){

        $dados = [
         "rg" => $rg,
         "nomeVolun" => $nomeVolun,
         "dataNasc" => $dataNasc,
         "numero" => $numCasa,
         "caminho_foto" => $ftPerfil,
         "grupo_trabalho" => $gpTrabalho
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
