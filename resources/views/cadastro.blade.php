<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente - Suporte de Manutenção</title>
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
            <a class="nav-link" href="/">Home</a>
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
        <div class="container">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-center" >Cadastro de Cliente</h1>
                
            </div>
        </div>    

        <div class="container">
            <form class="was">
                <div class="row">
                    <div class="col">
                        <label for="validationTextarea" class=" col-form-label">Nome Completo</label>
                        <input type="text" class="form-control" placeholder="Digite o nome do cliente">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class=" col-form-label">Sexo</label>
                        <input type="text" class="form-control" placeholder="Digite o Sexo">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class=" col-form-label">Estado Civil</label>
                        <input type="text" class="form-control" placeholder="Digite o Estado Civil">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">CPF</label>
                        <input type="text" class="form-control" placeholder="Digite o Cpf">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">RG</label>
                        <input type="text" class="form-control" placeholder="Digite o Rg">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">Endereço</label>
                        <input type="text" class="form-control" placeholder="Digite o nome da rua e o número">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">Bairro</label>
                        <input type="text" class="form-control" placeholder="Digite o Bairro">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">Cidade</label>
                        <input type="text" class="form-control" placeholder="Digite a Cidade">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">Estado</label>
                        <input type="text" class="form-control" placeholder="Digite o Estado">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">Telefone</label>
                        <input type="text" class="form-control" placeholder="Digite o Telefone">
                    </div>
                    <div class="col">
                        <label for="validationTextarea" class="col-sm-2 col-form-label">E-mail</label>
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Digite o Email">
                    </div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
        <br>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>