

<div class="container">
  <div class="jumbotron ">

    <h1>GRUPOS EXISTENTES</h1>


    <table class="table table-striped">
      <tr>
        <th>Nome</th>
      </tr>

      <?php foreach ($grupos as $gru) {?>
      <tr>
        <th><?= $gru->descricao; ?> </th>
      </tr>
    <?php  }?>

    </table>


<a class="btn btn-dark p" href="<?= base_url('painel')?>"> Voltar </a>



  </div>

</div>
