

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
       [ 'Dr.Richard Webber', 'Coronary Artery Bypass', new Date(0,0,0,14,0,0),  new Date(0,0,0,18,0,0) ],
      [ 'Dr.Derek Shepherd', 'Craniotomy',             new Date(0,0,0,12,0,0),  new Date(0,0,0,14,30,0) ],
      [ 'Dr.Derek Shepherd', 'Tumor Removal',          new Date(0,0,0,14,45,0),  new Date(0,0,0,15,30,0) ],
      [ 'Dr.Meredith Grey', 'Clot Removal',            new Date(0,0,0,12,0,0),  new Date(0,0,0,13,0,0) ],
       [ 'Dr.Meredith Grey', 'Hysterectomy',            new Date(0,0,0,14,0,0),  new Date(0,0,0,16,0,0) ],
       [ 'Dr.Miranda Bailey',   'Appendectomy',         new Date(0,0,0,13,30,0), new Date(0,0,0,15,0,0) ],
       [ 'Dr.Miranda Bailey',   'Hernia Repair',         new Date(0,0,0,16,0,0), new Date(0,0,0,18,0,0) ],
       [ 'Dr.Mark Sloan',   'Rhinoplasty',         new Date(0,0,0,13,0,0), new Date(0,0,0,16,0,0) ],
       [ 'Dr.Mark Sloan',   'Meloplasty',         new Date(0,0,0,16,30,0), new Date(0,0,0,19,0,0) ],
       [ 'Dr.Erica Hahn',   'Heart Bypass',         new Date(0,0,0,12,0,0), new Date(0,0,0,16,0,0) ],
      [ 'Dr.Christina Yang',   'Heart Transplant',      new Date(0,0,0,12,30,0), new Date(0,0,0,14,30,0) ],
      [ 'Dr.Christina Yang',   'Heart Valve Replacement', new Date(0,0,0,15,0,0), new Date(0,0,0,16,30,0) ],
      [ 'Dr.Owen Hunt',   'ER / Trauma',                  new Date(0,0,0,12,0,0), new Date(0,0,0,15,0,0) ],
      [ 'Dr.April Kepner',   'ER / Trauma',               new Date(0,0,0,15,0,0), new Date(0,0,0,20,0,0)]]);


      

    var options = {
      timeline: { colorByRowLabel: true }
    };

    chart.draw(dataTable, options);
  }

</script>
    <div id="example5.1" style="height: 400px; width: 100%;"></div>
