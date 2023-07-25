  <?php

  include_once('connect.php');
  
  $sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id;";
  $result = $conn->query($sql);
  $data = $result->fetch_all(MYSQLI_ASSOC);
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Kelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <!-- Ini Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light text-light bg-dark mb-4">
        <a class="navbar-brand text-light" href="#">Ranking SMKN 10 </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li>
              <a class="nav-link text-light href="#"> Kelas<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Peringkat Keseluruhan</a>
            </li>
            <li class="nav-item dropdown active" >
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                XI PPLG
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">XI AKL 1</a>
                <a class="dropdown-item" href="#">XI AKL 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">XI BDP 1</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>

    
    
    <!-- Ini label dan Textbox -->
      
      <div class="container p-4 border mb-4">
        <div class="row">
            <div class="col md-4">
                <h3>Input Data</h3>
        
        <div class="mb-3">
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" class="form-control form-control-lg" placeholder="Kamu Siapa?">
        </div>
        
        <div class="mb-3">
        <label for="Absen">Absen</label>
        <input type="number" id="kelas" name="kelas"  class="form-control form-control-lg" placeholder="Absen Berapa?">
      </div>
    
    <input type="submit" class="btn bg-success text-light">
  
    </div>

    <!-- Kalau ini Tabelnya pak -->
   
    <div class="col-md-8">
        <h3 class="text-center">Daftar Ranking</h3>
                <table border="1" class="table-bordered table text-center">            
                   <thead class="bg-secondary text-light"> 
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $key => $d): ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $d['name'] ?></td>
                      <td><?= $d['scores'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot class="bg-secondary text-light">
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                  </tr>
                </tfoot>
                  

                  </table>
            </div>
          </div>
          </div>
        </div>
    </div>

   <!-- Nah kalau ini bagian Bawahnya pak -->
   
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>&copy; 2023 Ranking Class, Ini punya Cakra &#128545;</p>
          </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  

</body>
</html>