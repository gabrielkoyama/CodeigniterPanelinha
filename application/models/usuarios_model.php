<?php

class Usuarios_model extends CI_Model{


  function login($data)
  {
       $this -> db -> select('*');
       $this -> db -> from('cadastro');
       $this -> db -> where('email', $data['email']);
       $this -> db -> where('senha', $data['senha']);
       $this -> db -> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
  }
  }
  /*
  if(count($dados) == 0){
      $id_do_grupo['grupo_id'] = $dados->id;
      $myid['cadastro_id'] = $this->session->userdata('id');

      if($this->db->insert('grupo_membros', $id_do_grupo, $myid)){
        echo "cadastrado no grupo com sucesso!";
      }
      else{
        echo "nao foi cadastrado com sucesso :( ";
      }
  }
  else{
    echo "acho";
  }

  }
  /*
    function search($data){

      $this -> db -> select('*');
      $this -> db -> from('grupo');
      $this -> db -> where('descricao',$data[]);

      $query = $this-> db-> get();

      if($query-> num_row() == 1){
        return false;
      }else{
        return $query->result();
      }

    }
    */
