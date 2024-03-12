<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">AttendanceSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">sing in</a>
        </li>
        <div class="container mb-2 mb-lg-2">
        <h2>Welcome to Dashboard</h2>
        <a href="logout.php" class="btn btn-warning">Logout</a>
       </div>
          <a class="nav-link" href="registration.html">sing up</a> <li class="nav-item">
          <a class="nav-link" href="tu.txt">About</a>
        </li><li class="nav-item">
</ul>
    </div>
  </div>
</nav>
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    
        <h1>INSTITUTE OF TECHNOLOGY MANAGEMENT GWLIOR</h1>
        <h5>IT STARTS WITH US.</h5>
      </div>
</div>
<br></br>
    <div class="container-fluid">
        <header class=" ">
            <div class="row">
                <div class="col-12">
                <header class="text-white text-center mb-3 py-3">
                    <h1>ATTENDANCE MANAGEMENT SYSTEM <h6> ITM  GOI</h6></h1>
                    <br></br>
                    <h3> ATTENDANCE MONTH: <u><?php echo strtoupper(date("F")); ?></u></h3>
                
                </div>
            </div>
                  </header>

        <div class="row">
            <div class="col-8">
             <header class="text-white text-center mb-3 py-3">
           
                <?php require_once("SmartAttendanceSheet.php"); ?>
            </div>
            <div class="col-12">
            <header class=" text-white text-center mb-3 py-3">
                <?php require_once("addingStudents.php");   //for changing the colour of table
                    echo "<hr>";
                    require_once("addAttendance.php");
                ?>
            </div>
 </div>
    </div>
</div>    
</body>
</html>