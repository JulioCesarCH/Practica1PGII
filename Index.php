<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container-fluid">     
     <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SAN PIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Alumno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Académico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comunicados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trámite Documentario</a>
        </li>
      </ul>
      <span class="navbar-text">
        
      </span>
    </div>
  </div>
</nav>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
     <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><p class="h3">Menu</p></a>
      </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Periodo<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></span>

      </div>
    </nav>
    </div>
    <div class="col-md-11"><table class="table table-dark table-hover"> 
          <thead>
               <tr>
                    <th>Codigo</th>
                      <th>Descripcion</th>
                      <th>Año</th>
                    <th>Ciclos</th>
                    <th>Estado</th>
               </tr>
          </thead>
     <tbody>
          <?php
          include 'conexion.php';
          $sql = "select *from periodo";
          $datos = $conmy->query($sql);
          //var_dump($datos);
          foreach($datos as $periodo)
          {
               echo "<tr>";
               echo  "<td>".$periodo['id_periodo']."</td>";
               echo  "<td>".$periodo['descripcion_periodo']."</td>";
               echo  "<td>".$periodo['anio_periodo']."</td>";
               echo  "<td>".$periodo['ciclos_periodo']."</td>";
               echo  "<td>".$periodo['estado_periodo']."</td>";
               echo "</tr>";
          }
          ?>
     </table>
     </tbody>
     </div>
  </div>
</div>

<div class="container-fluid">     
     <div class="row">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SAN PIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Usuario: CJULIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Area: Oficina Central</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil: Admin</a>
      </ul>
      <span class="navbar-text">
        
      </span>
    </div>
  </div>
</nav>
</div>
  </body>
</html>