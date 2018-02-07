<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Manutenções</title>
    <script>
        var pesquisar = function () {
            var nome = document.getElementById('pesquisa').value
            var link = "router.php?page=pesquisa"
            if(nome.length > 0) {
                link += "&nome=" + nome;
                console.log("nome > 0");
            }
                console.log("link: " + link);
            window.location.href = link;
        }
    </script>
  </head>
  <body>

      <!-- Links //-->
      <a href="router.php?page=registros">Área Geral</a>
      <br>
      <a href="router.php?page=admin">Área Administrativa.</a>
      <hr>
      Equipamento: <input type="text" name="name" id="pesquisa">
      <br>
      <br>
      <button onclick="pesquisar()" style="border-radius: 10px; text-align: center; width: 125px; background:#3F7FBF; padding: 10px;color: #ffffff;font-weight: bold">PESQUISAR</button>
      <br>
      <br>
      <table>
      <tr>
        <th>ID Equipamento</th>
        <th>Nome</th>
        <th>Manutenções</th>
      </tr>

      <!-- Dados dos alunos //-->
      <?php for($x=0 ; $x < count($lista) ; $x++): ?>
        <tr>
          <td style="text-align: center"><?= $lista[$x]['id'] ?></td>
          <td style="text-align: center"><?= $lista[$x]['nome'] ?></td>
          <td style="text-align: center"><a href=<?=$hrefs[$x]?>>Manutencoes</a></td>
        </tr>
      <?php endfor ?>
      <!-- <?php foreach($lista as $equipamento): ?>
        <tr>
          <td><?= $equipamento['id'] ?></td>
          <td><?= $equipamento['nome'] ?></td>
        </tr>
      <?php endforeach ?> -->
    </table>

  </body>
</html>
