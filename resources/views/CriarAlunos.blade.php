<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo asset('css/syles.css')?>" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 01 web</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <!-- Bibliotecas -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Botostrasp -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <script src="js/progressbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
<div class="container" id="nav-container">
        <!-- add essa class -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
          <a class="navbar-brand" href="index.html">
            <img id="logo" src="fotos/Logo.png" alt="Projeto 01"> Projeto 01
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav">
            <a class="nav-item"> <a class="nav-item nav-link" href="{{ url('/criar-alunos') }}">Cadastrar alunos</a>
              <a class="nav-item nav-link" id="professores-menu" href="#">Materias</a>
              <a class="nav-item nav-link" id="professores-menu" href="#">Professores</a>
              <a class="nav-item nav-link" id="alunos" href="#">Alunos</a>
              </div>
          </div>
        </nav>
      </div>
    </header>

    <form action="/cadastrar-aluno" method="POST">
    @csrf
    <label for="">Nome:</label>
    <input type="text"placeholder="Digite o Nome" name="nome_aluno">
<br /> <br />
<label for="">Disciplina</label>
<input type="text"placeholder="Digite a Disciplina" name="nome_disciplina">
<br /><br />
<label for="">Filmes</label>
<input type="text"placeholder="Digite o Filme" name="nome_filme">
<button>Enviar Cadastro</button>
</form>
    
</body>
</html>