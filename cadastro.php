<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dijunto</title>
        <link rel="icon" type="imagem/png" href="./img/logo.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/cadastro.css">
        

    </head>
    <body >

<section class="tudo">
          <a href="index.php"><img id="img" src="img/logo2.png" alt="dijunto"></a>
            <h2 id="titulo">Formulario de Cadastro</h2>
    <form class="container form-signin">
        <div class="form-row">
            <div class="col">
            <label for="inputname">Nome</label>
            <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
            <label for="inputname">Sobrenome</label>
            <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Ponto de Referência</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Bairro</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
            <div class="form-group col-md-6">
            <label for="inputState">Cidade</label>
            <select id="inputState" class="form-control">
                <option selected>Guanambi</option>
                <option>Carinhanha</option>
                <option>Iuiu</option>
            </select>
        </div>
        
        <div class="preferencia form-group">
            <label for="inputPreferencia">Favoritar como:   </label><br>
        <div class="custom-control custom-radio custom-control-inline ">
            
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label mb-1" for="customRadioInline1"><img id="botao" src="img/casa.png" alt="dijunto">Casa</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label mb-1" for="customRadioInline2"><img id="botao" src="img/apartamento.png" alt="dijunto">Apartamento</label>
          </div>
        </div>
          
        <div id="texto_link" class="custom-control text-center custom-checkbox bg">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label mb-1" for="customCheck1">Li e aceito todos os termos</label>
        
        </div>
        <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">Cadastrar</button>
        <a id="texto_link" class="link" href="index.php"> Voltar ao inicio</a>

    </form>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CADASTRO CONCLUIDO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img id="img" src="img/therock.png" alt="dijunto"><br>
          Parabéns agora se divirta aproveitando nossos serviços.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  </footer>
     </body>
 </html>