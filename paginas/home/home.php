<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .chart-container {
            height: 700px;
            width: 800px;
        }
    </style>
</head>
<body>
    <center>
    <div class="mt-3 mb-4"><h1 style="color: black;">Dashboard</h1></div>

    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card w-100"style="border:2px solid #056384;">
          <div class="card-body">
            <p class="card-title" style="color:grey;">Ultimo livro alugado</p>
            <h4 class="card-text mb-2" style="color: #478079"> <?php 
                $sql = "SELECT * FROM tbaluguel ORDER BY idAluguel DESC LIMIT 1";
                $resultado = mysqli_query($conexao, $sql);

                if ($resultado && mysqli_num_rows($resultado) > 0) {
                  // Extrair os dados do último registro
                  $ultimoRegistro = mysqli_fetch_assoc($resultado);
              
                  // Exibir os dados do último registro
                  echo "Livro: " . $ultimoRegistro['livroAluguel'] . "<br>";
              } else {
                  // Exibir mensagem caso não tenha sido encontrado nenhum registro
                  echo "Nenhum registro encontrado.";
              }
              ?> </h4>
            <h3><i class="bi bi-journal-check" style="color: #218074;"></i></h3>
          </div>
        </div>
      </div>
        <div class="col-sm-6">
          <div class="card w-100" style="border:2px solid #056384;">
            <div class="card-body">
              <p class="card-title" style="color:grey;">Livro mais alugado</p>
              <h4 class="card-text mb-2" style="color: #478079"><?php 
                $sql = "SELECT livroAluguel, COUNT(livroAluguel) 
                AS total_repeticoes FROM tbaluguel GROUP BY livroAluguel ORDER BY total_repeticoes DESC LIMIT 1;";
                $resultado = mysqli_query($conexao, $sql);

                if ($resultado && mysqli_num_rows($resultado) > 0) {
                  // Extrair os dados do último registro
                  $Mregistro = mysqli_fetch_assoc($resultado);
              
                  // Exibir os dados do último registro
                  echo "Livro: " . $Mregistro['livroAluguel'] . "<br>";
              } else {
                  // Exibir mensagem caso não tenha sido encontrado nenhum registro
                  echo "Nenhum registro encontrado.";
              }
              ?></h4>
              <h3><i class="bi bi-bookmark-star" style="color: #218074;"></i></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row" >
            <div class="col-md-6 mt-2"style="border: 2px solid blue;">
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="chart_div1" class="w-100"></div>
                </div>
            </div>
            <div class="col-md-6 mt-2"style="border: 2px solid blue;">
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="chart_div2" class="w-100"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            <?php

            // Consulta SQL para obter os dados para o gráfico de colunas
            $sql1 = "SELECT nomeLivro, estoqueLivro FROM tblivro";
            $result1 = $conexao->query($sql1);

            if ($result1->num_rows > 0) {
                $data1 = array();
                $data1[] = array('Livro', 'Estoque');

                while ($row1 = $result1->fetch_assoc()) {
                    $data1[] = array($row1['nomeLivro'], (int)$row1['estoqueLivro']);
                }

                $jsonData1 = json_encode($data1);

                echo "var data1 = google.visualization.arrayToDataTable(" . $jsonData1 . ");\n";
                echo "var options1 = {
                    title: 'Estoque por livro',
                    width: '100%',
                    height: 450
                };
                var chart1 = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
                chart1.draw(data1, options1);";
            } else {
                echo "Nenhum dado encontrado na tabela 1.";
            }

            // Consulta SQL para obter os dados para o gráfico de linhas
            $sql2 = "SELECT nomeLivro, alugadoLivro FROM tblivro";
            $result2 = $conexao->query($sql2);

            if ($result2->num_rows > 0) {
                $data2 = array();
                $data2[] = array('Livro', 'Aluguel');

                while ($row2 = $result2->fetch_assoc()) {
                    $data2[] = array($row2['nomeLivro'], (int)$row2['alugadoLivro']);
                }

                $jsonData2 = json_encode($data2);

                echo "var data2 = google.visualization.arrayToDataTable(" . $jsonData2 . ");\n";
                echo "var options2 = {
                    title: 'Livros Alugados',
                    width: '100%',
                    height: 450
                };
                var chart2 = new google.visualization.LineChart(document.getElementById('chart_div2'));
                chart2.draw(data2, options2);";
            } else {
                echo "Nenhum dado encontrado na tabela.";
            }
            ?>
        }
        window.addEventListener('resize', drawCharts);
    </script>

    </center>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>