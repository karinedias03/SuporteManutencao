<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte de Manutenção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Suporte de Manutenção</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/acessorios">Acessórios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cadastro">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/quemSomos">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/servicos">Serviços</a>
          </li>          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img width="100%" height="100%" src="img/cel2.jpg" class="d-block w-100" alt="...">
        
      </div>
      <div class="carousel-item">
      <img width="100%" height="100%" src="img/cel1.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <div class="carousel-item">
         <img width="100%" height="100%" src="img/cel3.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <br>
    <br>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/cadastro_aparelho.png" class="d-block w-100" alt="...">
        <h2>Acessórios</h2>
        <p>Aqui você encontra todo tipo de acessório para o seu aparelho eletrônico.</p>
        <p><a class="btn btn-secondary" href="/acessorios">Detalhes &raquo;</a></p>
      </div>

      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/cadastrar_cliente.png" class="d-block w-100" alt="...">
        <h2>Cadastro de Clientes</h2>
        <p>Aqui você cadastra e visualiza os dados do cliente.</p>
        <p><a class="btn btn-secondary" href="/cadastro">Detalhes &raquo;</a></p>
      </div>

      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/historico_manutencao.png" class="d-block w-100" alt="...">
        <h2>Serviços</h2>
        <p>Aqui você encontra os serviços disponíveis.</p>
        <p><a class="btn btn-secondary" href="/servicos">Detalhes &raquo;</a></p>
      </div>
    </div>
    <br>
    <br>

  </div><!-- /.container -->
  
</main>

    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>