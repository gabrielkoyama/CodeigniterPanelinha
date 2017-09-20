
<div class="container">
  <div class="jumbotron">
    <h1>PAGINA DE TESTE RLX</h1>


    <table class="table table-striped">


    <?php foreach ($teste as $t) {?>


      <tr>
        <th><?= $t->id; ?> </th>
        <th><?= $t->nome; ?> </th>
        <th><?= $t->email; ?> </th>
        <th><?= $t->senha; ?> </th>
      </tr>

    <?php  }?>
  </table>

</div>
</div>
