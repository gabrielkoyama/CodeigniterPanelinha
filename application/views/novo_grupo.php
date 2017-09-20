
<div class="container">
  <div class="jumbotron">

    <h1>Criar Novo Grupo</h1>


    <form class="form-control" action="<?= base_url('base/cadastrar_grupos');?>" method="post" >

      <?php
      if($erro){
        ?>
      <div class="alert alert-danger" role="alert"><?=$erro?></div>
      <?php
        }
      ?>
      <!-- NOME -->
      <div class="form-group">
        <label for="descricao">Nome:</label>
        <input type="text" name="descricao" class="form-control" id="nomedogrupo" aria-describedby="emailHelp" placeholder="Nome" required>
      </div>

      <button type="submit" class="btn btn-dark" id="novogrupo" >Cadastrar novo grupo</button>
      <a class="btn btn-dark" href="<?= base_url('painel');?>">Cancelar</a>
  </form>


  </div>
</div>
