<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel de Control - Voto Seguro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Raleway&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <style>
      body {
        font-family: 'Ubuntu', sans-serif;
        background-color: #f4f6f9;
      }

      .navbar {
        background-color: #2c3e50;
        border: none;
      }

      .navbar-brand {
        color: #ecf0f1 !important;
        font-weight: bold;
      }

      .navbar-btn {
        margin-top: 8px;
      }

      .stats-box {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        padding: 30px;
        margin-top: 120px;
      }

      .stats-box h2 {
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 10px;
      }

      .stats-box p {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 16px;
        color: #7f8c8d;
      }

      .candidate-block {
        margin-bottom: 30px;
      }

      .progress {
        height: 30px;
        background-color: #ecf0f1;
        border-radius: 20px;
        overflow: hidden;
      }

      .progress-bar {
        font-weight: bold;
        line-height: 30px;
        padding-left: 10px;
        animation: growBar 1s ease;
      }

      @keyframes growBar {
        from { width: 0; }
        to { width: var(--bar-width); }
      }

      .total-votes {
        margin-top: 40px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: #2980b9;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a href="cpanel.php" class="navbar-brand">Voto Seguro</a>
          </div>
          <div class="collapse navbar-collapse" id="example-nav-collapse">
            <ul class="nav navbar-nav">
              <li><a href="nomination.html"><strong>Lista de Candidatos</strong></a></li>
              <li><a href="changePassword.php"><strong>Administrar Contraseñas</strong></a></li>
            </ul>
            <a href="index.html" class="btn btn-success navbar-btn navbar-right"><strong>Cerrar Sesión</strong></a>
          </div>
        </div>
      </nav>

      <div class="row justify-content-center">
        <div class="col-md-8 stats-box">
          <h2>Panel de Control</h2>
          <p>Estadística de votos por candidato</p>

          <?php
            require 'config.php';

            $IDM = $GP = $JMS = $PV = 0;

            $conn = mysqli_connect($hostname, $username, $password, $database);
            if (!$conn) {
              echo "<p>Error de conexión.</p>";
            } else {
              // Candidato 1
              $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE voted_for='IDM'");
              while ($row = mysqli_fetch_assoc($result)) { if ($row['voted_for']) $IDM++; }
              $idm_value = $IDM * 10;
              echo "<div class='candidate-block'>
                      <strong>Alejandro Ramírez Quiroga</strong>
                      <div class='progress'>
                        <div class='progress-bar progress-bar-success' style='width: {$idm_value}%;'>{$IDM} votos</div>
                      </div>
                    </div>";

              // Candidato 2
              $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE voted_for='GP'");
              while ($row = mysqli_fetch_assoc($result)) { if ($row['voted_for']) $GP++; }
              $gp_value = $GP * 10;
              echo "<div class='candidate-block'>
                      <strong>Mariana Torres Delgado</strong>
                      <div class='progress'>
                        <div class='progress-bar progress-bar-primary' style='width: {$gp_value}%;'>{$GP} votos</div>
                      </div>
                    </div>";

              // Candidato 3
              $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE voted_for='JMS'");
              while ($row = mysqli_fetch_assoc($result)) { if ($row['voted_for']) $JMS++; }
              $jms_value = $JMS * 10;
              echo "<div class='candidate-block'>
                      <strong>Ricardo Huamán Paredes</strong>
                      <div class='progress'>
                        <div class='progress-bar progress-bar-info' style='width: {$jms_value}%;'>{$JMS} votos</div>
                      </div>
                    </div>";

              // Candidato 4
              $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE voted_for='PV'");
              while ($row = mysqli_fetch_assoc($result)) { if ($row['voted_for']) $PV++; }
              $pv_value = $PV * 10;
              echo "<div class='candidate-block'>
                      <strong>Valeria Rojas Salazar</strong>
                      <div class='progress'>
                        <div class='progress-bar progress-bar-warning' style='width: {$pv_value}%;'>{$PV} votos</div>
                      </div>
                    </div>";

              // Total
              $total = 0;
              $result = mysqli_query($conn, "SELECT * FROM tbl_users");
              while ($row = mysqli_fetch_assoc($result)) { if ($row['voted_for']) $total++; }
              echo "<div class='total-votes'>Votos totales: {$total}</div>";
            }
          ?>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
