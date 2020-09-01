<head>
    <title> Gráficos em linha </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                // Campos do grafico, por exemplo o Campo2 é a quantidade de cadastros e o Campo1 é a data de cadastro
                ['Campo1', 'Campo2'], 

                <?php
                include '../graphics01/conexao.php';
                // Campo1 é a Data que foi realizado o cadastro
                // O Campo2 é os ID dos Cadastros
                // A operação abaixo iria fazer uma media de quantos registros foram adicionados em uma data 
                $sql = "SELECT Campo1', COUNT(Campo2) FROM TabelaDoBanco GROUP BY Campo1";
                $buscar = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_array($buscar)) {
                    // Passando os dados para dentro do gráfico
                    $datacadas = $dados['Campo1'];
                    $clientes = $dados['COUNT(Campo2)'];


                ?>
                    // Imprimindo os dados para imprimir no gráfico 
                    ['<?php echo $datacadas; ?>', <?php echo $clientes; ?>],

                <?php } ?>
            ]);

            var options = {
                title: 'Cadastros - Clientes',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <!-- Incluindo o gráfico em seu HTML -->
    <div id="curve_chart" style="width: 950px; height: 500px; float:left" class="shadow-lg p-2 mb-5 bg-white rounded"></div>
</body>