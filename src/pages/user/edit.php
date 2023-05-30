<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
  updateUserAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["phone"]);

$user = findUserAction($conn, $_GET['id']);

?>
<div class="container">
  <div class="row">
    <a href="../../../index.php" class="text-decoration-none">
      <h1>Edição</h1>
    </a>
    <a class="btn btn-success text-white" href="../../../index.php">Início</a>
  </div>
  <div class="row flex-center">
    <div class="form-div">
      <form class="form" action="../../pages/user/edit.php" method="POST">
        <input type="" name="id" value="<?= $user['id'] ?>" required />
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['phone']) ?>" required>
        </div>

        <button class="btn btn-success text-white" type="submit">Editar</button>
      </form>
    </div>
  </div>
</div>
<?php require_once '../partials/footer.php'; ?>