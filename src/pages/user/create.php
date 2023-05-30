<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
  createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
  <div class="row flex-center">
    <a href="../../../index.php" class="text-decoration-none">
      <h1>Cadastro </h1>
    </a>
    <a class="btn btn-primary" href="../../../index.php">Início</a>
  </div>
  <div class="row flex-center">
    <div class="form-div">
      <form class="form" action="../../pages/user/create.php" method="POST">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="text" class="form-control" name="email" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" name="phone" required>
        </div>

        <button class="btn btn-success text-white mt-4" type="submit">Salvar</button>
      </form>
    </div>
  </div>
</div>
<?php require_once '../partials/footer.php'; ?>