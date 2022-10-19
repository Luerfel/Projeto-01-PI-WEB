
    <h1>Alunos</h1>
<table border="1">
  <tr>
    <td>Aluno</td>
    <td>Disciplina</td>
    <td>Filmes</td>


@foreach($data as $item)
<tr>
  <td>{{$item['Nome']}}</td>
  <td>{{$item['Disciplina']}}</td>
  <td>{{$item['Filmes']}}</td>       
</tr>                                                                                   
@endforeach


