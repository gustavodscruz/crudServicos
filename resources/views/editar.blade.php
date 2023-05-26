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
        <form method="POST" action="{{url('atualizar')}}">
            @csrf
            <input type="hidden" name="cid" value="{{$info->id}}">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" autocomplete="off" placeholder="Nome do Cliente" value="{{$info-> nome}}">
                </div>
                <br>
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" autocomplete="off" placeholder="(xx) xxxxx-xxxx" value="{{$info->telefone}}"
                </div>