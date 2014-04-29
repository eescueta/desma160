<? include_once("../../../includes/header.php"); ?>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
  ['Time in bed', 'Sleep Quality'],
  [461,0.72],
  [533,1.00],
  [425,0.72],
  [478,0.91],
  [435,0.79],
  [453,0.89],
  [483,0.91],
  [423,0.80],
  [471,0.91],
  [405,0.74],
  [446,0.81],
  [466,0.89],
  [468,0.84],
  [365,0.77],
  [361,0.66],
  [424,0.78],
  [566,0.96],
  [383,0.71],
  [448,0.80],
  [548,0.98],
  [441,0.75],
  [456,0.83],
  [425,0.81],
  [398,0.68],
  [420,0.75],
  [360,0.63],
  [378,0.66],
  [497,0.88],
  [425,0.76],
  [547,0.92],
  [423,0.69],
  [438,0.70],
  [403,0.73],
  [493,0.80],
  [502,0.81],
  [504,0.84],
  [443,0.81],
  [446,0.70],
  [535,0.97],
  [519,0.84],
  [589,0.90],
  [464,0.67],
  [538,0.93],
  [492,0.76],
  [471,0.77],
  [305,0.30],
  [495,0.88],
  [494,0.83],
  [492,0.81],
  [466,0.81],
  [481,0.85],
  [506,0.89],
  [467,0.40],
  [483,0.84],
  [474,0.75],
  [444,0.70],
  [357,0.71],
  [382,0.73],
  [328,0.23]
]);

        var options = {
          title: 'Sleep Quality [%] vs. Time in bed [min]',
          hAxis: {title: 'Time in bed', minValue: 400, maxValue: 550},
          vAxis: {title: 'Sleep Quality', minValue: 0.5, maxValue: 1.3},
          legend: 'none',
          trendlines: { 0: {} },   
          
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script src="chart.js"></script>

    <div id="chart_div" style="width: 900px; height: 500px; display:inline-block; "></div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />


    <p>This small project uses the same data set from my first project, in which I examined my sleep patterns using averages. Instead of using averages, I wanted to use each indiviudal day as a data point.
    The x-axis of the graph has the time of bed I spent in bed measured in minutes, while the y-axis of the graph measures sleep quality in percentages.
    The graph itself utilizes the Google Charts API, and contains a linear trendline to display the apparent correlation between sleep quality and time spent in bed. 
    The few outliers that lie below the line are days in which I had trouble falling asleep, resulting in low sleep quality.</p>

    <p>The app used to record my sleeping habits was <a href="http://www.sleepcycle.com/" target="_blank">Sleep Cycle for iOS</a>. 
    The data used for analysis can be found at this link: 
    <a href="https://docs.google.com/spreadsheet/pub?key=0Ao9hO7k0BUzWdE5CdlZEVTliSS1kX3NYbkctQnl6MGc&amp;single=true&amp;gid=2&amp;output=html" target="_blank">Sleep Data</a> </p>


