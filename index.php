<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dijunto</title>
        <link rel="icon" type="imagem/png" href="./img/logo.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">


    </head>
    <body>
        <div class="teste">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <a href="#"><img src="img/navlogo.png" alt="dijunto"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"  style="background:#fff"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul  class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="entrar.php">Entrar</a></li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#nequipe">Equipe</a></li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#areas">Nossas Areas</a></li>
                    <div class="nav-item active" ><a class="btn btn-warning my-2 my-sm-0" type="submit" role="button" href="cadastro.php" name="cadastrar">Cadastrar</a>
                </ul>
              </nav>

            </header>

            <section class="hero">
                <form method="POST" action="pesquisar.php">
                    <div class="align middle">
                        <h1 id="texto_destaque">Procurar por comida</h1>
                        <label class="input-group">
                            <input class=" form-control " type="search" placeholder="Pesquisar" name="pesquisar" aria-label="Search" style="border-right: none;">
                            <div class="input-group-append">
                                <div class="input-group-text" style="background-color: #FFF"><i class="fas fa-search"></i></div>
                            </div>

                        </label>
                        <p id="texto_sugestao">Sugestões: Especial Pizza, Dogão Lanches, Verão Lanches.</p>
                    </div>
                </form>
            </section>
        </div>


        <section class="corpo">
            <div class="grid">

            <h2 id="tit">Cidades de atuação</h2>
                <ul class="nav nav-pills mb-3 nav-justified " id="pills-tab" role="tablist">
                    <li class="nav-item large">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Guanambi</a>
                    </li>
                    <li class="nav-item large">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Carinhanha</a>
                    </li>
                    <li class="nav-item large">
                    <a class="nav-link large" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Iuiu   </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <img src="img/gbi.jpg" class="img-fluid titimg " alt="Imagem responsiva">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas nisi,
                            facilisis duis aenean vel tempor donec suspendisse proin potenti, penatibus
                            venenatis sagittis dui congue integer ultricies fusce. Purus dolor mi dui
                            malesuada taciti iaculis convallis imperdiet natoque, quis litora class
                            bibendum molestie elit adipiscing interdum efficitur, sociosqu duis habitasse
                            nulla mattis tempor sollicitudin vestibulum. Ut venenatis ornare conubia elementum
                            ligula torquent dui mus interdum parturient ultricies scelerisque, fusce bibendum
                            maecenas dapibus rutrum dictumst sodales elit urna himenaeos.</p>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <img src="img/cnn.jpg" class="img-fluid titimg " alt="Imagem responsiva">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas nisi,
                        facilisis duis aenean vel tempor donec suspendisse proin potenti, penatibus
                        venenatis sagittis dui congue integer ultricies fusce. Purus dolor mi dui
                        malesuada taciti iaculis convallis imperdiet natoque, quis litora class
                        bibendum molestie elit adipiscing interdum efficitur, sociosqu duis habitasse
                        nulla mattis tempor sollicitudin vestibulum. Ut venenatis ornare conubia elementum
                        ligula torquent dui mus interdum parturient ultricies scelerisque, fusce bibendum
                        maecenas dapibus rutrum dictumst sodales elit urna himenaeos.</p></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <img src="img/iuiu.jpg" class="img-fluid titimg " alt="Imagem responsiva">
                        <p>LLLorem ipsum dolor sit amet consectetur adipiscing elit maecenas nisi,
                            facilisis duis aenean vel tempor donec suspendisse proin potenti, penatibus
                            venenatis sagittis dui congue integer ultricies fusce. Purus dolor mi dui
                            malesuada taciti iaculis convallis imperdiet natoque, quis litora class
                            bibendum molestie elit adipiscing interdum efficitur, sociosqu duis habitasse
                            nulla mattis tempor sollicitudin vestibulum. Ut venenatis ornare conubia elementum
                            ligula torquent dui mus interdum parturient ultricies scelerisque, fusce bibendum
                            maecenas dapibus rutrum dictumst sodales elit urna himenaeos.</p>
                    </div>
                </div>
            </div>

        </section>
        <hr aria-hidden="true">
    <section class="cont--border-bot">


        <img id="sobre" class="img_flex rounded-sm" src="./img/corpo.png" class="rounded float-right" alt="...">
        <h2 > Sobre Nós</h2>
        <p>
            lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
            arcu class bibendum ut curabitur dignissim vivamus sapien porttitor turpis
            sodales molestie purus velit ridiculus leo facilisis quam neque convallis
            odio morbi parturient felis metus dis orci blandit faucibus volutpat potenti
            justo vitae urna cras rhoncus dictum ligula montes lacinia duis porta risus

        </p>
    </section>
    <hr aria-hidden="true">
    <h2 id="nequipe"> Nossa equipe</h2>
    <section class="cont--border-bot-2">


        <img class="img_flex_2" src="./img/equipe.jpg" class="rounded float-right" alt="...">
        <div>

            <p>
                lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
                arcu class bibendum ut curabitur dignissim vivamus sapien porttitor turpis
                sodales molestie purus velit ridiculus leo facilisis quam neque convallis
                odio morbi parturient felis metus dis orci blandit faucibus volutpat potenti
                justo vitae urna cras rhoncus dictum ligula montes lacinia duis porta risus

            </p>
        </div>
    </section>
    <hr aria-hidden="true">
    <h2  id="areas"  class="titulo">Nossas areas</h2>
    <!--<container class="galeria">

        <container class="m-5">
            <img class="img_flex_2" src="./img/logo2.png" class="rounded float-right" alt="...">
            <p>
                lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
                arcu class bibendum ut curabitur dignissim vivamus sapien porttitor turpis
                sodales molestie purus velit ridiculus leo facilisis quam neque convallis
            </p>
        </container>
        <container class="m-5">
            <img class="img_flex_2" src="./img/logo2.png" class="rounded float-center" alt="...">
            <p>
                lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
                arcu class bibendum ut curabitur dignissim vivamus sapien porttitor turpis
                sodales molestie purus velit ridiculus leo facilisis quam neque convallis
            </p>
        </container>
        <container class="m-5">
            <img class="img_flex_2" src="./img/logo2.png" class="rounded float-left" alt="...">
            <p>
                lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
                arcu class bibendum ut curabitur dignissim vivamus sapien porttitor turpis
                sodales molestie purus velit ridiculus leo facilisis quam neque convallis
            </p>
        </container>
    </container>-->
    <div class="row row-cols-1 row-cols-md-5">
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./img/card_01.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lanches e Pizzas</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./img/card_02.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Açai e Sorvetes</h5>
              <p class="card-text">lorem ipsum dolor sit amet consectetur adipiscing elit nunc vel taciti iaculis
                arcu class bibendum ut curabitur dignissim vivamus</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="./img/card_03.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Marmitex</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
      </div>





























    <footer>
        <div class="footer-top">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                </ul>

            <p> Todos os direitos reservados - Dijunto 2029</p>

        </div>













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
