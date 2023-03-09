<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Lumino - Dashboard</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link href="css/datepicker3.css" rel="stylesheet">
   <link href="css/styles.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <style>
      .container-btn>* {
         border: none;
         height: 3em;
         width: 7em;
         border-radius: 0.5em;
      }

      .container-btn>:first-child {
         background: red;
      }

      .container-btn>:nth-child(2) {
         background: yellow;
      }

      .container-btn>:nth-child(3) {
         background: green;
      }
   </style>

</head>
<div class="container-btn">

   <button type=" ">submit</button>
   <button type=" ">submit</button>
   <button type=" ">submit</button>

</div>












<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script>
   window.onload = function() {
      var chart1 = document.getElementById("line-chart").getContext("2d");
      window.myLine = new Chart(chart1).Line(lineChartData, {
         responsive: true,
         scaleLineColor: "rgba(0,0,0,.2)",
         scaleGridLineColor: "rgba(0,0,0,.05)",
         scaleFontColor: "#c5c7cc"
      });
   };
</script>

</body>

</html>