
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Voto Satisfactorio - Voto Seguro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Raleway&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <style>
      body {
        font-family: 'Ubuntu', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }

      .navbar {
        background-color: #2c3e50;
        border: none;
      }

      .navbar-brand {
        color: #ecf0f1 !important;
        font-weight: bold;
      }

      .confirmation-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px 20px;
      }

      .confirmation-box {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        padding: 50px;
        text-align: center;
        max-width: 500px;
        width: 100%;
      }

      .confirmation-box img {
        width: 100px;
        height: 100px;
        margin-bottom: 30px;
      }

      .confirmation-box h3 {
        font-family: 'Oswald', sans-serif;
        font-size: 26px;
        color: #2c3e50;
        margin-bottom: 30px;
      }

      .btn-finalizar {
        background-color: #3498db;
        color: white;
        font-weight: bold;
        border-radius: 30px;
        padding: 12px 40px;
        font-size: 18px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
      }

      .btn-finalizar:hover {
        background-color: #2980b9;
        transform: scale(1.05);
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">Voto Seguro</a>
        </div>
      </div>
    </nav>

    <div class="confirmation-container">
      <div class="confirmation-box">
        <?php
          require('config.php');

          if (isset($_POST["submit"])) {
            if (isset($_POST["voterName"]) && isset($_POST["voterEmail"]) && isset($_POST["voterID"]) && isset($_POST["selectedCandidate"])) {
              $name = test_input($_POST["voterName"]);
              $email = test_input($_POST["voterEmail"]);
              $voterID = test_input($_POST["voterID"]);
              $selection = test_input($_POST["selectedCandidate"]);
            }
          } else {
            echo "<br>Todos los campos son obligatorios.";
          }

          $DB_HOST = "localhost";
          $DB_USER = "root";
          $DB_PASSWORD = "";
          $DB_NAME = "db_evoting";

          $conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME) or die("No se pudo conectar a la base de datos.");

          $sql = "INSERT INTO db_evoting.tbl_users VALUES(null,'$name','$email','$voterID','$selection');";

          if (mysqli_query($conn, $sql)) {
            echo "<img src='images/voto_satisfactorio.png' alt='Voto exitoso'>";
            echo "<h3>Has votado satisfactoriamente.</h3>";
            echo "<a href='index.html' class='btn-finalizar'><span class='glyphicon glyphicon-ok'></span> Finalizar</a>";
          } else {
            echo "<img src='images/error.png' alt='Error'>";
            echo "<h3>Parece que tenemos un problema.</h3>";
            echo "<a href='index.html' class='btn-finalizar'><span class='glyphicon glyphicon-ok'></span> Finalizar</a>";
          }
        ?>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


