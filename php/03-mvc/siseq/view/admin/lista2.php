<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Manutenções</title>
  </head>
  <body>

      <!-- Links //-->
      <a href="router.php?page=registros">Área Geral</a>
      <br>
      <a href="router.php?page=admin">Área Administrativa.</a>
    <table>
      <tr>
        <th>Data Limite</th>
        <th>ID Equipamento</th>
        <th>Tipo de Manutencao</th>
        <th>Descricao</th>
      </tr>

      <!-- Dados dos alunos //-->
      <?php foreach($lista as $registro): ?>
        <tr>
          <td><?= $registro['datalimite'] ?></td>
          <td><?= $registro['equipamento_id'] ?></td>
          <td><?= $registro['tipo']  ?></td>
          <td><?= $registro['descricao']  ?></td>
        </tr>
      <?php endforeach ?>
    </table>

  </body>
</html>
