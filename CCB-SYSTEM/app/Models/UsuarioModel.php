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
        "numero",
        "caminho_foto",
        "grupo_trabalho",
        "formacao",
        "dispVolun1",
        "dispVolun2",
        "dispVolun3"
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
    

    public function CadastrarUser($rg, $dataNasc, $numCasa, $nomeVolun, $gpTrabalho, $ftPerfil ,$formacaoAcad, $dispVolun1, $dispVolun2, $dispVolun3){

        $dataAtual = date("Y-m-d");

        $dados = [
         "rg" => $rg,
         "nome" => $nomeVolun,
         "data_nasc" => $dataNasc,
         "data_cad" => $dataAtual,
         "numero" => $numCasa,
         "caminho_foto" => $ftPerfil,
         "grupo_trabalho" => $gpTrabalho,
         "formacao" => $formacaoAcad,
         "dispVolun1" => $dispVolun1,
         "dispVolun2" => $dispVolun2,
         "dispVolun3" => $dispVolun3
        ];

        $retorno = $this->insert($dados);

        if($retorno){
            return true;
        }
        else{
            return false;
        }
    }

    public function consultarUsers()
    {
        $pesquisa = $this->findAll();
        if($pesquisa){
            return $pesquisa;
        } else {
            return 'Houve um erro ao consultar todos os usuários';
        }
    }

    public function buscarComID($id){
        $resultado = $this->where('id', $id)->first();
        if($resultado != null){
            return $resultado;
        } else {
            echo 'Erro ao achar usuário em nossa base de dados.';
        }
    }

    public function atualizarUser($id, $dados)
    {
        $this->update($id,$dados);
        return true;
    }

}
