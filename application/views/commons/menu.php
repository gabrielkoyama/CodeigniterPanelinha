<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
  <a class="navbar-brand" href="#">Panelinha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login');?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('cadastro');?>">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('painel');?>">Painel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('base/sair');?>">Sair</a>
      </li>
    </ul>

  </div>
</nav>
