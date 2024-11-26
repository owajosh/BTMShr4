<?php

 include "sidebar.php";
?>

<!DOCTYPE html>


<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
const xArray = [50,60,70,80,90,100,110,120,130,140,150];
const yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
const data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
const layout = {
  xaxis: {range: [40, 160], title: "PAYROLL MONTH AND YEARS"},
  yaxis: {range: [5, 16], title: "EMPLOYEE"},  
  title: "PAYROLL EMPLOYEE"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>