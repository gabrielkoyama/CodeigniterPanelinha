
<div class="container">
  <div class="jumbotron">


    <h1>Login</h1>

    <form class="form-control" action="<?=base_url('base/logar')?>" method="POST">
      <?php
      if($erro){
        ?>
      <div class="alert alert-danger" role="alert"><?=$erro?></div>
      <?php
        }
      ?>

      <label class="col-md-12">
        <input type="text" class="form-control" placeholder="Email" name="email" required/>
      </label>
      <label class="col-md-12">
        <input type="password" class="form-control" placeholder="Senha" name="senha" required/>
      </label>
      <label class="col-md-12"><input type="submit" class="btn btn-success" value="Entrar"/></label>
    </form>


  </form>

</div>
</div>
