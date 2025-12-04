<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cambio de Contraseña - Voto Seguro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Raleway&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <style>
      body {
        font-family: 'Ubuntu', sans-serif;
        background-color: #f4f6f9;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .navbar {
        background-color: #2c3e50;
        border: none;
      }

      .navbar-brand {
        color: #ecf0f1 !important;
        font-weight: bold;
      }

      .admin-btn {
        background-color: #27ae60;
        color: white;
        border-radius: 20px;
        padding: 6px 20px;
        margin-top: 8px;
      }

      .form-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 80px;
        padding-bottom: 40px;
      }

      .form-box {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        padding: 40px;
        width: 100%;
        max-width: 400px;
      }

      .form-box h2 {
        font-family: 'Oswald', sans-serif;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 30px;
        text-align: center;
      }

      .form-control {
        border-radius: 8px;
        margin-bottom: 15px;
      }

      .btn-primary {
        border-radius: 20px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand">Voto Seguro</a>
        </div>
        <div class="navbar-right">
          <a href="cpanel.php">
            <button type="button" class="btn admin-btn navbar-btn">
              Panel Administrativo
            </button>
          </a>
        </div>
      </div>
    </nav>

    <div class="form-container">
      <div class="form-box">
        <h2>Contraseña de Administrador</h2>
        <form action="updatePwd.php" method="POST">
          <div class="form-group">
            <label>Contraseña Actual</label>
            <input type="text" name="existingPassword" class="form-control" placeholder="Ingrese su actual contraseña" required />
            <label>Nueva Contraseña</label>
            <input type="password" name="newPassword" class="form-control" placeholder="Ingrese su nueva contraseña" required />
            <label>Repita la Contraseña</label>
            <input type="password" name="retypePassword" class="form-control" placeholder="Ingrese su contraseña otra vez" required />
            <button type="submit" class="btn btn-primary btn-block">
              <span class="glyphicon glyphicon-ok"></span> Cambiar Contraseña
            </button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>