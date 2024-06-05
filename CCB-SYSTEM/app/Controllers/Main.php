<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdmModel;
use App\Models\AsoModel;
use App\Models\CongregacaoModel;
use App\Models\EnderecoModel;
use App\Models\EquipamentosModel;
use App\Models\Nr10Model;
use App\Models\Nr33Model;
use App\Models\Nr35Model;
use App\Models\TelefoneModel;
use App\Models\UsuarioModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Main extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function login_submit()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $adm_model = new AdmModel();
        $resultado = $adm_model->verificarADM($email, $senha);
        if($resultado == true){
            $dados = [
                'id' => $resultado->id,
                'email' => $resultado->email
            ];
            session()->set($dados);
            return redirect()->to('main');
        } else {
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
    public function apis()
    {
        return view('apis');
    }
    public function cadFirst()
    {
        return view('cad-first');
    }
    public function cadSecond()
    {
        return view('cad-second');
    }
    public function cadThird()
    {
        return view('cad-third');
    }

    public function cadastroP(){

       
        $rg = $this->request->getPost('rg');
        $dataNasc = $this->request->getPost('dataNasc');
        $cep = $this->request->getPost('cep');
        $numCasa = $this->request->getPost('numCasa');
        $cidade = $this->request->getPost('cidade');
        $nomeVolun = $this->request->getPost('nome');
        $cttFixo = $this->request->getPost('ctt-fixo');
        $rua = $this->request->getPost('endereco');
        $nomeCongreg = $this->request->getPost('congregacao');
        $gpTrabalho = $this->request->getPost('gpTrabalho');
        $cttCelular = $this->request->getPost('ctt-celular');
        $bairro = $this->request->getPost('bairro');
        $ftPerfil = $this->request->getPost('ftperfil');

        session()->set("rg", $rg);        
        session()->set("dataNasc", $dataNasc);        
        session()->set("cep", $cep);        
        session()->set("numCasa", $numCasa);        
        session()->set("cidade", $cidade);        
        session()->set("nomeVolun", $nomeVolun);        
        session()->set("cttFixo", $cttFixo);        
        session()->set("rua", $rua);        
        session()->set("nomeCongreg", $nomeCongreg);        
        session()->set("gpTrabalho", $gpTrabalho);        
        session()->set("cttCelular", $cttCelular);        
        session()->set("bairro", $bairro);        
        session()->set("ftPerfil", $ftPerfil);  

        return redirect()->to("cadastro/segunda");
    }

    public function cadastroS(){

        $formacaoAcad = $this->request->getPost("formacaoAcad");
        $dispvolun1 = $this->request->getPost("dispvolun1");
        $dispvolun2 = $this->request->getPost("dispvolun2");
        $dispvolun3 = $this->request->getPost("dispvolun3");
        $epiOculos = $this->request->getPost("epi-oculos");
        $epiMascara = $this->request->getPost("epi-mascara");
        $epiluva = $this->request->getPost("epi-luva");
        $epiCap = $this->request->getPost("epi-capacete");
        $epibota = $this->request->getPost("epi-bota");
        $epiAuricular = $this->request->getPost("epi-auricular");
        $epiCinto = $this->request->getPost("epi-cinto");
        $epiUniform = $this->request->getPost("epi-uniform");
        
        session()->set("formacaoAcad", $formacaoAcad);
        session()->set("dispvolun1", $dispvolun1);
        session()->set("dispvolun2", $dispvolun2);
        session()->set("dispvolun3", $dispvolun3);
        session()->set("epi-oculos", $epiOculos);
        session()->set("epi-mascara", $epiMascara);
        session()->set("epi-luva", $epiluva);
        session()->set("epi-capacete", $epiCap);
        session()->set("epi-bota", $epibota);
        session()->set("epi-auricular", $epiAuricular);
        session()->set("epi-cinto", $epiCinto);
        session()->set("epi-uniform", $epiUniform);
        
        return redirect()->to("cadastro/segunda/terceira");
        
    }

    public function cadastroT(){

        $nr10DataInicio = $this->request->getPost("nr10-data-inicio");
        $nr10DataVencimento = $this->request->getPost("nr10-data-vencimento");
        $nr10DataReciclagem = $this->request->getPost("nr10-data-reciclagem");
        $nr33DataInicio = $this->request->getPost("nr33-data-inicio");
        $nr33DataVencimento = $this->request->getPost("nr33-data-vencimento");
        $nr33DataReciclagem = $this->request->getPost("nr33-data-reciclagem");
        $nr35DataInicio = $this->request->getPost("nr35-data-inicio");
        $nr35DataVencimento = $this->request->getPost("nr35-data-vencimento");
        $nr35DataReciclagem = $this->request->getPost("nr35-data-reciclagem");
        $asoDataInicio = $this->request->getPost("aso-data-inicio");
        $asoDataVencimento = $this->request->getPost("aso-data-vencimento");
        $asoDataReciclagem = $this->request->getPost("aso-data-reciclagem");

        $formacaoAcad = session()->get("formacaoAcad");
        $dispvolun1 = session()->get("dispvolun1");
        $dispvolun2 = session()->get("dispvolun2");
        $dispvolun3 = session()->get("dispvolun3");
        $epiOculos = session()->get("epi-oculos");
        $epiMascara = session()->get("epi-mascara");
        $epiluva = session()->get("epi-luva");
        $epiCap = session()->get("epi-capacete");
        $epibota = session()->get("epi-bota");
        $epiAuricular = session()->get("epi-auricular");
        $epiCinto = session()->get("epi-cinto");
        $epiUniform = session()->get("epi-uniform");
        
        $rg = session()->get("rg");
        $dataNasc = session()->get("dataNasc");
        $cep = session()->get("cep");
        $numCasa = session()->get("numCasa");
        $cidade = session()->get("cidade");
        $nomeVolun = session()->get("nomeVolun");
        // $cttFixo = session()->get("cttFixo");
        $rua = session()->get("rua");
        $nomeCongreg = session()->get("nomeCongreg");
        $gpTrabalho = session()->get("gpTrabalho");
        $cttCelular = session()->get("cttCelular");
        $bairro = session()->get("bairro");
        $ftPerfil = session()->get("ftPerfil");
        
        try
        {
            $usuarioModel = new UsuarioModel();
            $enderecoModel = new EnderecoModel();
            $telefoneModel = new TelefoneModel();
            $congregacaoModel = new CongregacaoModel();
            $equipamentoModel = new EquipamentosModel();
            $asoModel = new AsoModel();
            $nr10Model = new Nr10Model();
            $nr33Model = new Nr33Model();
            $nr35Model = new Nr35Model();

            $cadastroUsuario = $usuarioModel->CadastrarUser($rg,$dataNasc,$numCasa, $nomeVolun,$gpTrabalho, $ftPerfil, $formacaoAcad, $dispvolun1, $dispvolun2, $dispvolun3);
            $cadastroEndereco = $enderecoModel->CadastrarEnd($cep, $rua, $bairro);
            $cadastroTelefone = $telefoneModel->CadastrarTel($cttCelular);
            $cadastroCongregacao = $congregacaoModel->CadastrarCongre($nomeCongreg);
            $cadastroEquipamentos = $equipamentoModel->CadastrarEquip($epiOculos, $epiMascara, $epiluva, $epibota, $epiCap, $epiAuricular, $epiCinto, $epiUniform);
            $cadastroAso = $asoModel->CadastrarAso($asoDataInicio, $asoDataVencimento, $asoDataReciclagem);

            $cadastroNr10 = $nr10Model->CadastrarNR10($nr10DataInicio, $nr10DataVencimento, $nr10DataReciclagem);
            $cadastroNr33 = $nr33Model->CadastrarNR33($nr33DataInicio, $nr33DataVencimento, $nr33DataReciclagem);
            $cadastroNr35 = $nr35Model->CadastrarNR35($nr35DataInicio, $nr35DataVencimento, $nr35DataReciclagem);

            if($cadastroUsuario == true){
                if($cadastroEndereco == true){
                    if($cadastroTelefone == true){
                        if($cadastroCongregacao == true){
                            if($cadastroEquipamentos == true){
                                if($cadastroAso == true){
                                    if($cadastroNr10 == true){
                                        if($cadastroNr10 == true){
                                            if($cadastroNr33 == true){
                                                if($cadastroNr35 == true){
                                                    return redirect()->to('main');
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            return redirect()->to('main');

        } catch (Exception $error){
            var_dump($error);
            return redirect()->to("main");
        }



        return redirect()->to("cadastro/segunda/terceira");
    }

    public function certificate()
    {
        return view('certificate');
    }
    public function consultInfo()
    {
        return view('consult');
    }
    public function main()
    {
        return view('main');
    }
    public function consultVolu()
    {
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->consultarUsers();
        $data['users'] = $resultado;
        return view('volu-consult', $data);
    }
    public function consultaComID($id)
    {
        $modelUsuario = new UsuarioModel();
        $modelTelefone = new TelefoneModel();
        $modelCongreg = new CongregacaoModel();
        $modelEndereco = new EnderecoModel();
        $resultadoEnde = $modelEndereco->buscarComID($id);
        $resultadoUser = $modelUsuario->buscarComID($id);
        $resultadoTel = $modelTelefone->buscarComID($id);
        $resultadoCongreg = $modelCongreg->buscarComID($id);
        $dados = [
            'id' => $resultadoUser->id,
            'rg' => $resultadoUser->rg,
            'endereco' => $resultadoEnde->rua,
            'data_nasc' => $resultadoUser->data_nasc,
            'numeroEnde' => $resultadoUser->numero,
            'nome' => $resultadoUser->nome,
            'bairro' => $resultadoEnde->bairro,
            'contato' => $resultadoTel->tipo_tel,
            'nome_congreg' => $resultadoCongreg->nome_congreg,
            'grupo' => $resultadoUser->grupo_trabalho,
            'cep' => $resultadoEnde->cep,
            'celular' => $resultadoTel->tel,
            'formacao' => $resultadoUser->formacao,
            'disp1' => $resultadoUser->dispVolun1,
            'disp2' => $resultadoUser->dispVolun2,
            'disp3' => $resultadoUser->dispVolun3
        ];
        return view('consult', $dados);
    }
    public function atualizandoDados()
    {
        $usuarioModel = new \App\Models\UsuarioModel();
        $congregacaoModel = new \App\Models\CongregacaoModel();
        $modelEndereco = new EnderecoModel();
        $modelTelefone = new TelefoneModel();
    
        $id = $this->request->getPost('id');
        $dados = [
            'rg' => $this->request->getPost('rg'),
            'nome' => $this->request->getPost('nome'),
            'data_nasc' => $this->request->getPost('dataNasc'),
            'numero' => $this->request->getPost('num'),
            'caminho_foto' => $this->request->getPost('caminho_foto'),
            'grupo_trabalho' => $this->request->getPost('gpTrabalho'),
            'formacao' => $this->request->getPost('formAcad'),
            'dispVolun1' => $this->request->getPost('disp1'),
            'dispVolun2' => $this->request->getPost('disp2'),
            'dispVolun3' => $this->request->getPost('disp3')
        ];

        $dadosCongreg = [
            'id_usuarios' => $id,
            'nome_congreg' => $this->request->getPost('nomeCongreg')
        ];

        $dadosEndereco = [
            'id_usuario' => $id,
            'cep' => $this->request->getPost('cep'),
            'rua' => $this->request->getPost('end'),
            'bairro' => $this->request->getPost('bairro')
        ];

        $dadosTelefone = [
            'id_usuarios' => $id,
            'tel' => $this->request->getPost('ctt-fixo')
        ];
    
        try{
            $usuarioModel->atualizarUser($id, $dados);
            $congregacaoModel->atualizarCongre($dadosCongreg);
            $modelEndereco->atualizarEndereco($dadosEndereco);
            $modelTelefone->atualizarTelefone($dadosTelefone);
        } catch (DatabaseException $error){
            echo 'Erro! ' . $error;
        }
        return redirect()->to('consultVolu');


    
    }
    public function consultPesquisa()
    {      
        $usuarioModel = new UsuarioModel();
        $pesquisa = $this->request->getPost('nomePesquisado');
        $resultado = $usuarioModel->where('nome', $pesquisa)->findAll();
        $data['users'] = $resultado;
        if($data['users'] == null){
            $error['error'] = 'Nenhum usuário encontrado.';
            return view('errors/error_personalizado', $error);
        }
        return view('volu-consult', $data);
    }
}
