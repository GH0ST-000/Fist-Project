<?php
require_once ('../System/dbrate.php');


?>

<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../Style/rate.css">
    <script src="https://kit.fontawesome.com/0483fb807f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud || Service</title>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            // Load Charts and the corechart and barchart packages.
            google.charts.load('current', {'packages':['corechart']});

            // Draw the pie chart and bar chart when Charts is loaded.
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([ <?php
                    foreach ($product AS $rate){
                        $name=$rate["name"];
                        $lastname=$rate["lastname"];
                        $value=$rate["criterium"];
                        $nums="
   ['$name $lastname ', $value],
  ";
                        echo $nums;
                    }

                    ?>
                ]);

                var piechart_options = {title:'Rate From Our Customer By Our Service',
                    width:650,
                    height:350};
                var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
                piechart.draw(data, piechart_options);

                var barchart_options = {title:'Who And How  Rate Us ?',
                    width:650,
                    height:350,
                    legend: 'none'};
                var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
                barchart.draw(data, barchart_options);
            }
        </script>
</head>
<body class="body">
<div class="header">
    <nav class="navbar navbar-light bg-light">
       <a href="welcome.php"> <span style="border-bottom: 2px solid black;border-top: 2px solid black; "  class="navbar-brand mb-0 h1">Home Page</span></a>
    </nav>

</div>



<div class="banner">
    <h3>Out Customer Opinion Is Important For Us <i style="color: red;" class="fas fa-heart"></i></h3>
</div>
<table class="columns">
    <tr>
        <td><div id="piechart_div"  style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
    </tr>
</table>
</body>
</html>
