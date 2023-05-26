<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema gerenciador</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
    ])

    <style>
        .gray{
            background-color: gray;
        }
        .white{
            background-color: white;
        }
    </style>
</head>
<body class="bg-dark-subtle gray">
    
    <div class="container white">
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">SISTEMA WEB</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white disabled" href="{{url('consultar')}}">Consultar</a>
                  </li>
              </div>
            </div>
        </nav>
        <p class="fs-2 fw-semibold p-2" >Cadastrar - Agendamento de Potenciais Clientes</p>
        <p>Sistema utilizado para agendamento de serviços.</p>

        <form class="m-2 d-flex flex-column" action="adicionar-agendamento" method="POST">
          @csrf
            <label class="form-label">Nome:</label>
            <input class="form-control" type="text">
            <label class="form-label">Telefone:</label>
            <input class="form-control" type="text">
            <label class="form-label">Origem:</label>
            <input class="form-control" type="text">
            <label class="form-label">Data do Contato:</label>
            <input class="form-control" type="text">
            <label class="form-label">Observação:</label>
            <textarea name="" id="" cols="30" rows="5"></textarea> 
            <button class="btn btn-primary form-control mt-4">Cadastrar</button><br>
        </form>
    </div>
    
</body>
</html>