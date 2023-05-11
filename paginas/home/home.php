<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <header class="mt-3 mb-3">
        <h3>Dashboard</h3>
    </header>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Livros", "Estoque", { role: "style" } ],

        <?php 
            $sql = "SELECT * FROM  tblivro";
            $buscar = mysqli_query($conexao, $sql);

            while($dados = mysqli_fetch_array($buscar)){
                $livro = $dados['nomeLivro'];
                $estoque = $dados['estoqueLivro'];

        
        ?>
        ["<?php echo $livro ?>", <?php echo $estoque ?>, "#blue"],
        
         <?php }?>       


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Quantidades de livros.",
        width: 1000,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</center>

</body>
</html>

