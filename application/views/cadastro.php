
<div class="container">
  <div class="jumbotron">

    <h1>Cadastro</h1>


    <form class="form-control" action="<?= base_url('base/cadastrar');?>" method="post" >

      <!-- NOME -->
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome" required>
      </div>

      <!-- EMAIL -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>

      <!-- SENHA -->
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" class="form-control" id="senha" onkeyup="checarSenha()" aria-describedby="emailHelp" placeholder="Senha" required>
      </div>

      <!-- CONFIRMAR SENHA -->
      <div class="form-group">
        <label for="senhaconf">Confimar senha:</label>
        <input type="password" name="senhaconf" class="form-control" id="senhaconf" onkeyup="checarSenha()" aria-describedby="emailHelp" placeholder="Confirme sua senha" required>
      </div>

      <div class="form-group" id="divcheck">

      </div>

      <button type="submit" class="btn btn-success" id="enviarsenha" disabled >Cadastrar</button>
      <a class="btn btn-dark" href="<?= base_url('base');?>">Voltar</a>
  </form>


  </div>
</div>

<script>

  $(document).ready(function(){

    $("#senha").keyup(checkPasswordMatch);
    $("#senhaconf").keyup(checkPasswordMatch);

  });

  function checarSenha(){
    var password = $("#senha").val();
    var confirmPassword = $("#senhaconf").val();

    if(password != confirmPassword){

      $("#divcheck").html("<span style='color: red'> Senhas nao conferem </span>");
        document.getElementById("enviarsenha").disabled = true;

    }else{

      $("#divcheck").html("<span style='color: green'> Senhas conferem </span>");
      document.getElementById("enviarsenha").disabled = false;

    }
  }
</script>
