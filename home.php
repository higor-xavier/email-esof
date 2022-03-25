<?php 
  require_once("validador_acesso.php");  
 ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>E-mail ESOF</title>
    <link rel="icon" href="imagens/mail.png">

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

    <!-- CSS customizado -->
    <link rel="stylesheet" type="text/css" href="CSS/estilo-home.css">

  </head>

  <body>

    <!-- Incluindo o fundo da página de login -->
    <img id="fundo" src="imagens/fundo.jpg">

    <!-- Menu lateral -->
    <div class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <img src="imagens/perfil.png" width="50px" height="50px">
                <?= $_SESSION['email']; ?>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li class="active"><a href="#"><i class='fas fa-envelope'></i>  Caixa de entrada (1)</a></li>
                <li><a href="#"><i class='fas fa-pencil-alt'></i>  Escrever e-mail</a></li>
                <li><a href="#"><i class="fas fa-edit"></i>  Rascunhos (1)</a></li>
                <!-- <li> Link with dropdown items 
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                    </ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li> -->
            </ul>
            <!-- Button trigger modal -->
            <div class="opcoes">
              <button type="button" class="btn btn-secondary ml-5" data-bs-toggle="modal" data-bs-target="#modalConfig">
                <i class="fas fa-cog fa-2x"></i>
              </button>

              <button class="btn btn-secondary ml-3" onclick="sair();">
                <i class="fas fa-sign-out-alt fa-2x"></i>
              </button>
            </div>
        </nav>

        <div id="content" style="width: auto%;max-width: 100%; display: flex;">
            <button type="button" id="sidebarCollapse" class="btn navbar-btn btn-light" style="border: none;">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="container caixa-entrada">
              <div class="row header-caixa">
                <div class="input-group mt-3">
                    <input class="form-control pesquisa" type="text" placeholder="Pesquisar e-mails" >
                    <div class="input-group-append">
                       <button type="button" class="btn btn-secondary pesquisa-btn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </div>
              <div class="row body-caixa">
                
                <!-- Início do layout básico do e-mail -->
                <div class="container">
                  <div class="card m-3 justify-content-center">
                    <div class="card-header">
                      <strong>Coordenação Sistemas de Informação - Monte Carmelo: &lt;bsi@ufu.mc&gt;</strong>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Divulgação: Vaga de Estágio na NTT Data</h4>
                      <h6 class="card-subtitle">&lt;higor@esof.com.br&gt;</h6>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sapien dui, feugiat et lorem quis, fringilla maximus nisl. Vivamus sed est pulvinar, aliquet purus ut, dictum elit.</p>
                      <a class="btn btn-outline-secondary" href="">Mais informações</a>
                    </div>
                  </div>

                </div>
        
              </div>
              <div class="row footer-caixa">
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item setas disabled">
                      <a class="page-link" href="">
                        <span><i class="fas fa-arrow-left"></i></span>
                        <span class="sr-only">Anterior</span> <!-- Aparece apenas para leitores de tela -->
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="">3</a>
                    </li>
                    <li class="page-item setas">
                      <a class="page-link" href="">
                        <span><i class="fas fa-arrow-right"></i></span>
                        <span class="sr-only">Próximo</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>



    </div>

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

      function sair() {
        window.location.href = "logoff.php";
      }

      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
              $(this).toggleClass('active');
          });
      });
    </script>

  </body>
</html>