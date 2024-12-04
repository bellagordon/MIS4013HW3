<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div id="month"></div>
        <div>
          <button id="btnBack"><i class="fa fa-angle-left"></i></button>
          <button id="btnNext"><i class="fa fa-angle-right"></i></button>
        </div>
      </div>
      <div class="weekdays">
        <div>Sun</div>
        <div>Mon</div>
        <div>Tue</div>
        <div>Wed</div>
        <div>Thu</div>
        <div>Fri</div>
        <div>Sat</div>
      </div>
      <div id="calendar"></div>
    </div>
    <div id="modal"></div>
    <div id="addEvent">
      <h2>Add Event</h2>
      <input type="text" id="txtTitle" placeholder="Event Title" />
      <button id="btnSave">Save</button>
      <button class="btnClose">Close</button>
    </div>

    <div id="viewEvent">
      <h2>Event</h2>
      <p id="eventText">This is Sample Event</p>
      <button id="btnDelete">Delete</button>
      <button class="btnClose">Close</button>
    </div>

    <script src="script.js"></script>
  </body>
</html>
