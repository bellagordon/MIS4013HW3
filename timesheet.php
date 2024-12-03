<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example5.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Doctor' });
    dataTable.addColumn({ type: 'string', id: 'Role' });
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
      [ 'Dr.Derek Shepherd', 'Craniotomy',             new Date(0,0,0,12,0,0),  new Date(0,0,0,14,30,0) ],
      [ 'Dr.Derek Shepherd', 'Tumor Removal',          new Date(0,0,0,14,45,0),  new Date(0,0,0,15,30,0) ],
      [ 'Dr.Meredith Grey', 'Clot Removal',            new Date(0,0,0,12,0,0),  new Date(0,0,0,13,0,0) ],
      [ 'Dr.Christina Yang',   'Heart Transplant',      new Date(0,0,0,12,30,0), new Date(0,0,0,14,30,0) ],
      [ 'Dr.Christina Yang',   'Heart Valve Replacement', new Date(0,0,0,15,0,0), new Date(0,0,0,16,30,0) ],
      [ 'Dr.Owen Hunt',   'ER',                         new Date(0,0,0,12,0,0), new Date(0,0,0,15,0,0) ]]);

    var options = {
      timeline: { colorByRowLabel: true }
    };

    chart.draw(dataTable, options);
  }

</script>

<style>
  .timesheet-container {
      border: 2px solid #007bff; /* Blue border */
      border-radius: 10px; /* Rounded corners */
      padding: 10px; /* Space inside the border */
      background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
      margin-top: 20px; /* Spacing from other elements */
  }
</style>
</head>
<body>
<div class="timesheet-container">
    <div id="example5.1" style="height: 400px; width: 100%;"></div>
</div>
</body>
</html>
