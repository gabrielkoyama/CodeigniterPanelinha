<div class="container">
  <div class="jumbotron ">

    <h1>SEUS GRUPOS</h1>

    <table class="table table-striped">
      <tr>
        <th>Nome</th>
      </tr>

      <?php foreach ($meusgrupos as $gru) {?>
      <tr>
        <th><?= $gru->descricao; ?></th>
      </tr>
    <?php  }?>

    </table>

    <a class="btn btn-dark p" href="<?= base_url('novo_grupo')?>"> Novo Grupo </a>
    <a class="btn btn-dark" href="<?= base_url('grupos')?>"> Todos os grupos </a>
    <a class="btn btn-dark" href="<?= base_url('searchgrupo')?>"> Entrar em um grupo existente </a>
    
  </div>
</div>
