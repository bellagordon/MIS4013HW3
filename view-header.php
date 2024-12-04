<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?=$pageTitle?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-3 mb-2 bg-info text-dark bg-opacity-10">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <!-- Image instead of text "SGH" -->
            <a class="navbar-brand" href="/">
              <img src="https://res.cloudinary.com/teepublic/image/private/s--5YIJG4GJ--/c_crop,x_10,y_10/c_fit,w_830/c_crop,g_north_west,h_1038,w_1038,x_-104,y_-374/l_upload:v1565806151:production:blanks:vdbwo35fw6qtflw9kezw/fl_layer_apply,g_north_west,x_-215,y_-485/b_rgb:004585/c_limit,f_jpg,h_630,q_90,w_630/v1529723695/production/designs/2817330_0.jpg" alt="Seattle Grace Hospital" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="instructor.php">Doctors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.php">Patients</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="instructor-with-courses.php">Doctors with Patients</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>
