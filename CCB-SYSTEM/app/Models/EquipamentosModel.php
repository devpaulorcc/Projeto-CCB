<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipamentosModel extends Model
{
    protected $table            = 'equipamentos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_usuarios', 'oculos_protecao', 'mascara', 'luva_de_raspa', 'bota', 'capacete',
        'protetor_auricular', 'cinto_de_seguranca', 'uniforme_especial'
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

    public function CadastrarEquip($oculos, $mascara, $luva, $bota, $capacete, $protetor, $cinto, $uniforme){

        $db = \Config\Database::connect();

        $dados = [
         "id_usuarios" => $db->insertID(),
         "oculos_protecao" => $oculos,
         "mascara" => $mascara,
         "luva_de_raspa" => $luva,
         "bota" => $bota,
         "capacete" => $capacete,
         "protetor_auricular" => $protetor,
         "cinto_de_seguranca" => $cinto,
         "uniforme_especial" => $uniforme,
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
