<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    <form action="/cadastrar-aluno" method="POST">
    @csrf
    <label for="">Nome:</label>
    <input type="text"placeholder="Digite o Nome" name="nome_aluno">
<br /> <br />
<label for="">Disciplina</label>
<input type="text"placeholder="Digite a Disciplina" name="nome_disciplina">
<br /><br />
<button>Enviar Cadastro</button>
</form>
    
</body>
</html>