<html lang="en">
<head>
    <title>Gráfico Pizza</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          // Campos do grafico, por exemplo o Campo2 é a quantidade de profissionais cadastrados em tais profissões  
          // e o Campo1 é as profissões
        ['Profissão', 'Quantidade'],
        <?php
        include '../graphics02/conexao.php';
        // Campo1 é a profissão
        // O Campo2 é os ID dos profissionais com tais profissões
        // A operação abaixo iria fazer uma media de quantos profissionais estão cadastrados com tais profissões 
        $sql = "SELECT Campo1', COUNT(Campo2) FROM TabelaDoBanco GROUP BY Campo1";
        $buscar = mysqli_query($conn, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {
            // Passando os dados para dentro do gráfico
            $id = $dados['COUNT(Campo2)'];
            $prof = $dados['Campo1'];
        ?>
            // Imprimindo os dados para imprimir no gráfico 
            ['<?php echo $prof; ?>', <?php echo $id; ?>],
        <?php } ?>
      ]);

      var options = {
        title: 'Funcionários',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
    <!-- Incluindo o gráfico em seu HTML -->
    <div id="donutchart" style="width: 570px; height: 500px; float:right" class="shadow-lg p-2 mb-5 bg-white rounded"></div>
</body>
</html>