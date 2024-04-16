<?php
require '../php/verifica.php';

if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo-univesp.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <script defer src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 55px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Marchiatto Café</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <label class="nav-link"><?php echo $nomeUser ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/logout.php" style = "text-allign: right; color: red;">Encerrar Sessão</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
<?php else: header("Location: ../login.php"); endif;?>