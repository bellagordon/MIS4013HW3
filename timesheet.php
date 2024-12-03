
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
          [ '<b>Dr. Derek Shepherd</b>', 'Craniotomy', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 14, 30, 0) ],
          [ '<b>Dr. Derek Shepherd</b>', 'Tumor Removal', new Date(0, 0, 0, 14, 45, 0), new Date(0, 0, 0, 15, 30, 0) ],
          [ '<b>Dr. Meredith Grey</b>', 'Clot Removal', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 13, 0, 0) ],
          [ '<b>Dr. Christina Yang</b>', 'Heart Transplant', new Date(0, 0, 0, 12, 30, 0), new Date(0, 0, 0, 14, 30, 0) ],
          [ '<b>Dr. Christina Yang</b>', 'Heart Valve Replacement', new Date(0, 0, 0, 15, 0, 0), new Date(0, 0, 0, 16, 30, 0) ],
          [ '<b>Dr. Owen Hunt</b>', 'ER', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 15, 0, 0) ]
        ]);
    var options = {
      timeline: { colorByRowLabel: true }
    };

    chart.draw(dataTable, options);
  }

</script>
    <div id="example5.1" style="height: 400px; width: 100%;"></div>
