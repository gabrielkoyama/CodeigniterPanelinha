<style>

#espacamento{
  margin-left: 10px;
}

</style>


<div class="container">
  <div class="jumbotron">

<div class="alert alert-danger" role="alert">"Grupo nao encontrado"</div>
    <form class="form-inline my-2 my-lg-0" action="<?= base_url('base/buscargrupo')?>" method="post">




          <input class="form-control mr-sm-2" name="descricao" type="text" placeholder="Nome do Grupo..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
          <a class="btn btn-dark" id="espacamento" href="<?= base_url('painel');?>">Voltar</a>
    </form>



  </div>
</div>
