<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>จัดการข้อมูลพื้นฐาน</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="a_backoffice.php">โรงพยาบาลสัตว์บางกอกรัชดา</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="a_backoffice.php">หน้าหลัก<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลสัตว์แพทย์
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-vet.php">เพิ่มข้อมูลสัตว์แพทย์</a>
              <a class="dropdown-item" href="a_show-vet.php">แสดงข้อมูลสัตว์แพทย์</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลเจ้าของ
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-per.php">เพิ่มข้อมูลเจ้าของ</a>
              <a class="dropdown-item" href="a_show-per.php">แสดงข้อมูลเจ้าของ</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลสัตว์เลี้ยง
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-pet.php">เพิ่มข้อมูลสัตว์เลี้ยง</a>
              <a class="dropdown-item" href="a_show-pet.php">แสดงข้อมูลสัตว์เลี้ยง</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลยา
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-drug.php">เพิ่มข้อมูลยา</a>
              <a class="dropdown-item" href="a_show-drug.php">แสดงข้อมูลยา</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลการนัดหมาย
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-app.php">เพิ่มข้อมูลการนัดหมาย</a>
              <a class="dropdown-item" href="a_show-app.php">แสดงข้อมูลการนัดหมาย</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              รายการแจ้งเตือน
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="a_add-alert.php">เพิ่มรายการแจ้งเตือน</a>
              <a class="dropdown-item" href="a_show-alert.php">แสดงรายการแจ้งเตือน</a>
            </div>
          </li>
        </ul>
      </div>
    </nav><br><br><br><br>
<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h2 align="center">จัดการข้อมูลพื้นฐาน</h3><hr><br>
  <div class="container">
    <div class="row">
<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
    <div class="card" style="width: 15rem;"><br>
      <p align="center"><img class="card-img-top" src="picture/a_backoffice/vet.png" alt="Card image cap" style="width:150px;height:150px;"></p>
      <div class="card-body">
        <a href="a_show-vet.php" align="center"><h5 class="card-title">ข้อมูลสัตว์แพทย์</h5></a>
      </div>
    </div>
  </div>
  <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
      <div class="card" style="width: 15rem;"><br>
        <p align="center"><img class="card-img-top" src="picture/a_backoffice/per.png" alt="Card image cap" style="width:150px;height:150px;"></p>
        <div class="card-body">
        <a href="a_show-per.php" align="center"><h5 class="card-title">ข้อมูลเจ้าของ</h5></a>
        </div>
      </div>
    </div>
    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
      <div class="card" style="width: 15rem;"><br>
        <p align="center"><img class="card-img-top" src="picture/a_backoffice/pets.png" alt="Card image cap" style="width:150px;height:150px;"></p>
          <div class="card-body">
            <a href="a_show-pet.php" align="center"><h5 class="card-title">ข้อมูลสัตว์เลี้ยง</h5></a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
        <div class="card" style="width: 15rem;"><br>
          <p align="center"><img class="card-img-top" src="picture/a_backoffice/drug.png" alt="Card image cap" style="width:150px;height:150px;"></p>
            <div class="card-body">
              <a href="a_show-drug.php" align="center"><h5 class="card-title">ข้อมูลยา</h5></a>
            </div>
          </div>
        </div>
</div>
</div>
</div><br>
<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <div class="container">
    <div class="row">
<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
    <div class="card" style="width: 15rem;"><br>
      <p align="center"><img class="card-img-top" src="picture/a_backoffice/app.png" alt="Card image cap" style="width:150px;height:150px;"></p>
      <div class="card-body">
        <a href="a_show-app.php" align="center"><h5 class="card-title">ข้อมูลการนัดหมาย</h5></a>
      </div>
    </div>
  </div>
  <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
      <div class="card" style="width: 15rem;"><br>
        <p align="center"><img class="card-img-top" src="picture/a_backoffice/alert.png" alt="Card image cap" style="width:150px;height:150px;"></p>
        <div class="card-body">
        <a href="a_show-alert.php" align="center"><h5 class="card-title">รายการแจ้งเตือน</h5></a>
        </div>
      </div>
    </div>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
