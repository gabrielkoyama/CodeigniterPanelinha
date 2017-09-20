	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Base extends CI_Controller {

	public function verificar_sessao(){

		if($this->session ->userdata('logado')== false){
			redirect('login');
		}
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
		$this->load->library('form_validation');
	}

	// PAGINAS NORMAIS

	public function index()
	{
		$this->verificar_sessao();
		$this->load->view('commons/header');
		//$this->load->view('commons/menu');
		$this->load->view('login');
		$this->load->view('commons/header');
	}

	public function login()
	{
		$data['erro'] = null;

		$this->load->view('commons/header');
		$this->load->view('commons/menu');
		$this->load->view('login',$data);
		$this->load->view('commons/header');
	}

	public function cadastro()
	{

		$this->load->view('commons/header');
		$this->load->view('commons/menu');
		$this->load->view('cadastro');
		$this->load->view('commons/header');
	}

	public function novo_grupo()
	{
		$data['erro'] = null;


		$this->load->view('commons/header');
		$this->load->view('commons/menu');
		$this->load->view('novo_grupo',$data);
		$this->load->view('commons/header');
	}

	public function searchgrupo()
	 {
		 //$data['erro'] = null;
		 //SEEEEEEEEEEEEEEAAAAAAAAAAAAARRRRRRRRCCCCCHHHHHHHHHHHHHHHHHHHHHHHHHH
		 $this->load->view('commons/header');
		 $this->load->view('commons/menu');
		 $this->load->view('searchgrupo');
		 $this->load->view('commons/header');
	 }
	 public function searchgrupoerro()
 	 {

		 $this->load->view('commons/header');
 		 $this->load->view('commons/menu');
 		 $this->load->view('searchgrupoerro');
 		 $this->load->view('commons/header');
 	 }

	 public function grupos()
 	{
 		$this->db->select('*');
 		$dados['grupos'] = $this->db->get('grupo')->result();

 		$this->load->view('commons/header');
 		$this->load->view('commons/menu');
 		$this->load->view('grupos',$dados);
 		$this->load->view('commons/header');
 	}

	 //CADASTROS

	 public function logar()
 	{

 		$datalogin = $this->input->post();
 		$res = $this->usuarios_model->login($datalogin);

 		if($res)
 		{

 			foreach($res as $result)
       {
				 // problema q tinha aqui eh q no model eu n selecionava o tudo da tabela ai n tinha o id p ele pegar
 				$this->session->set_userdata('logado',true);
 				$this->session->set_userdata('email',$result->email);
 				$this->session->set_userdata('id',$result->id);
 				redirect('painel');
 		}
 	}
 		else
 		{

			$data['erro'] = "Email ou senha invalidos";

			$this->load->view('commons/header');
			$this->load->view('commons/menu');
			$this->load->view('login',$data);
			$this->load->view('commons/footer');

 		}
 	}

	public function cadastrar(){

		$data['nome'] = $this->input->post('nome');
		$data['email'] = $this->input->post('email');
		$data['senha'] = $this->input->post('senha');

		if($this->db->insert('cadastro',$data)){
			redirect('painel');
		}
		else{
			redirect('login');
		}
	}

	public function painel()
	{
		$this->verificar_sessao();

		$getID = $this->session->userdata('id');
		$this -> db -> select('grupo.id, grupo.descricao');
		$this -> db -> from('grupo');
		$this -> db -> join('grupo_membros', 'grupo_membros.grupo_id = grupo.id');
		$this -> db -> where('grupo_membros.cadastro_id', $getID);
		$data['meusgrupos'] = $this->db->get()->result();

		$this->load->view('commons/header');
		$this->load->view('commons/menu');
		$this->load->view('painel',$data);
		$this->load->view('commons/header');
	}

	public function buscargrupo()
	{
		$data = $this->input->post('descricao');

		$this -> db -> select('*');
		$this -> db -> from('grupo');
		$this -> db -> where('descricao',$data);
		$dados = $this -> db -> get()->result();

		if(count($dados) == 0){
				//$data['erro'] = "Grupo nao encontrado";

				$this->load->view('commons/header');
				$this->load->view('commons/menu');
				$this->load->view('searchgrupoerro');
				$this->load->view('commons/footer');
		}
		else{

				foreach ($dados as $row){
					$id_do_grupo['cadastro_id'] = $this->session->userdata('id');
					$id_do_grupo['grupo_id'] = $row->id;
					$this->db->insert('grupo_membros', $id_do_grupo);
					redirect('painel');

			}
		}
	}




	public function cadastrar_grupos()
	{

		$data['descricao'] = $this->input-> post('descricao');

		$query = $this-> db-> select('*') -> from ('grupo') -> where('descricao', $this->input-> post('descricao'));
		$result = $query -> get();

		if($result -> num_rows() == 0){

			if($this -> db -> insert ('grupo', $data)){
				redirect('painel');
			}
		}
		else{
			$data['erro'] = "Grupo ja existe";

			$this->load->view('commons/header');
			$this->load->view('commons/menu');
			$this->load->view('novo_grupo',$data);
			$this->load->view('commons/footer');
		}

	}

	// LOGOUT
		public function sair()
	 {
		 $this->session->unset_userdata('logado');
     $this->session->unset_userdata('email');
     $this->session->unset_userdata('id');
		 session_destroy();
     redirect('login', 'refresh');
	 }

	}
