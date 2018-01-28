<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de estados</title>
  </head>
  <body>

    <form action="sucessoMatricula.html" method="get">
      <select name="estado">
        <?php foreach($lista as $estado): ?>
          <option value="<?= $estado['id'] ?>"><?= $estado['nome'] ?></option>
        <?php endforeach ?>
      </select>
      <input type="submit" value="Buscar">
    </form>
    <table>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Sigla</th>
      </tr>
      <!-- Dados dos alunos //-->
      <?php foreach($lista as $estado): ?>
        <tr>
          <td><?= $estado['id'] ?></td>
          <td><?= $estado['nome'] ?></td>
          <td><?= $estado['sigla'] ?></td>
        </tr>
      <?php endforeach ?>
    </table>

  </body>
</html>
