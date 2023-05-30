<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST['id']))
  deleteUserAction($conn, $_POST['id']);

?>
<div class="container">
  <div class="row">
    <a href="../../../index.php" class="text-decoration-none">
      <h1>Users - Delete</h1>
    </a>
    <a class="btn btn-primary text-white" href="../../../index.php">Início</a>
  </div>
  <div class="row flex-center">
    <div class="form-div">
      <form class="form" action="../../pages/user/delete.php" method="POST">
        <label>Você tem certeza que deseja remover este contato?</label>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" required />

        <button class="btn btn-success text-white" type="submit">Sim</button>
      </form>
    </div>
  </div>
</div>
<?php require_once '../partials/footer.php'; ?>