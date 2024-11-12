<?php
    if(isset($_SESSION['mensagem'])){
        if(isset($_SESSION['acao_sucesso'])){
    
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['mensagem']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
        } else {
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['mensagem']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php

        }
        unset($_SESSION['mensagem']);
        unset($_SESSION['acao_sucesso']);
    }
?>