<?php 
  require_once("validador_acesso.php");  
 ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>E-mail ESOF</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                  </a>  
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConfig">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalConfig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Configurações</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="form-group">
                  <form action="atualizar.php" method="POST">
                    <label class="m-1" for="email">Digite o novo e-mail:</label>
                    <input class="form-control" type="email" name="email" id="email" value= <?= $_SESSION['email'] ?>>
                    <label class="m-1" for="senhaVelha">Digite senha antiga:</label>
                    <input class="form-control" type="password" name="senhaVelha" id="senhaVelha">
                    <label class="m-1" for="senhaNova">Digite a nova senha:</label>
                    <input class="form-control" type="password" name="senhaNova" id="senhaNova">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="apagar();">Apagar conta</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <input type="submit" class="btn btn-primary" value="Salvar">
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Caso dê certo as alterações -->
    <?php 
    if (isset($_GET['att']) && $_GET['att'] == 'sucesso') {
    ?>

      <!-- Modal de sucesso -->
      <div class="modal fade" id="modalSucesso" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-success" id="exampleModalLabel2">Sucesso</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Modificações realizadas com sucesso!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Beleza!</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $("#modalSucesso").modal('show')
      </script> 
      
    <?php 
      }
    ?>

    <!-- Caso dê errado as alterações -->
    <?php 
    if (isset($_GET['att']) && $_GET['att'] == 'erroSenhas') {
    ?>

      <!-- Modal de erro das senhas -->
      <div class="modal fade" id="modalErroSenha" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel3">Erro</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              A senha fornecida está incorreta.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Corrigir</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $("#modalErroSenha").modal('show')
      </script> 
      
    <?php 
      }
    ?>

    <?php 
    if (isset($_GET['att']) && $_GET['att'] == 'erro') {
    ?>

      <!-- Modal de erro -->
      <div class="modal fade" id="modalErro" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel4">Erro</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Não foi possível atualizar as informações
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $("#modalErro").modal('show')
      </script> 
      
    <?php 
      }
    ?>

    <?php 
    if (isset($_GET['att']) && $_GET['att'] == 'iguais') {
    ?>

      <!-- Modal de informações iguais -->
      <div class="modal fade" id="modalIguais" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary" id="exampleModalLabel5">Erro</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Nenhuma informação foi alterada.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        $("#modalIguais").modal('show')
      </script> 
      
    <?php 
      }
    ?>

    <script type="text/javascript">
      function apagar() {
        window.location.href = "apagar.php";
      }
    </script>

  </body>
</html>