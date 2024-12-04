<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'Richard Webber', 'f':'Richard Webber<div style="color:red; font-style:italic">Chief of Surgery</div>'},
           '', 'Chief'],
          [{'v':'Derek Shepherd', 'f':'Derek Shepherd<div style="color:red; font-style:italic">Chief of Neurosurgery</div>'},
           'Richard Webber', 'Neuro'],
          [{'v':'Miranda Bailey', 'f':'Miranda Bailey<div style="color:red; font-style:italic">Chief Resident</div>'},
           'Richard Webber', 'Chief Resident'],
          [{'v':'Christina Yang', 'f':'Christina Yang<div style="color:red; font-style:italic">Head Cardiologist</div>'},
           'Miranda Bailey', 'Cardio'],
          [{'v':'Meredith Grey', 'f':'Meredith Grey<div style="color:red; font-style:italic">Attending General Surgeon</div>'},
           'Miranda Bailey', 'Gen'],
          [{'v':'Amelia Shepherd', 'f':'Amelia Shepherd<div style="color:red; font-style:italic">Attending Neurosurgeon</div>'},
           'Derek Shepherd', 'Att Neuro'],
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
    </head>
  <body>
    <div id="chart_div"></div>
  </body>
</html>
