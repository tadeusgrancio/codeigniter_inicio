<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_pessoas extends CI_Controller {

        function __construct(){
            parent::__construct();
        }
        
	public function index()
	{
                $this->load->view('menus');
		$this->load->view('empresas_pessoas');
	}
        
        public function cadastro()
	{       
                $this->load->helper('form');
                $retorno = NULL;
                $this->load->library('form_validation');
                $this->form_validation->set_rules('telefone1','Telefone','trim|required');
                if($this->form_validation->run()==FALSE){
                    $dados['form_erros'] = validation_errors();
                } else {
                    $dados['form_erros']=null;
                    
                    $this->load->model('Empresa_pessoa_model','empresa');
                    $campos = array(
                        
                        'cnpj'=>$this->input->post('cnpj'),
                        'nome_empresa'=>$this->input->post('nome_empresa'),
                        'contato'=>$this->input->post('contato'),
                        'nome_pessoa'=>$this->input->post('nome_pessoa'),
                        'cpf'=>$this->input->post('cpf'),
                        'telefone1'=>$this->input->post('telefone1'),
                        'telefone2'=>$this->input->post('telefone2')
                    );
                    if ($this->empresa->inserir($campos)){
                        $retorno = "Dados inseridos com sucesso.";
                        redirect(base_url('index.php/empresas_pessoas'));
                    }else
                    {
                        $retorno = "Erro ao inserir.";
                    }
                    
                }    
                
                $this->load->view('menus');
		$this->load->view('cadastro_empresas_pessoas',$dados);
	}
        
      
        
}
