<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php 
  require __DIR__ . '\../parts/head.view.php'; ?>
  <link rel="stylesheet" href="/assets/styles/global.css" />
  <link rel="stylesheet" href="/assets/styles/compra.css" />
  <link rel="stylesheet" href="/assets/styles/formularios.css">
  <script src="/assets/js/components/paw.js"></script>
  <script src="/assets/js/appPlatos.js"></script>
</head>

<body>
  <!--HEADER-->
  <?php require __DIR__ . '\../parts/header.view.php' ?>
  <main class="login-usuario">
    <!--Codigo login-->
    <header class="header-menu menu-background">
      <h1 class="menu-titulo">Menu</h1>
    </header>

    <h1 class="login">Crear plato</h1>

    <form method="POST" enctype="multipart/form-data"class="form-login" action=""> <!--Post y redireccionamiento a compra/menu -->
      <label for="nombre">
        Nombre
        <input name="nombre" id="nombre" required />
      </label>
      <label for="descripcion">
        Descripcion
        <input name="descripcion" id="descripcion" required />
      </label>
      <label for="precio">
        Precio
        <input name="precio" id="precio" required />
      </label>
      <label for="imagen" id="imagen-drop">
        Imagen
        <input type="file" id="imagen-drop-input" name="imagen" accept=".jpg, .png">
      </label>
      <p>Imagen de tamaño maximo 1MB</p>
      <?php if (isset($errorMessage)): ?>
        <p class="error-message"><?= $errorMessage ?></p>
      <?php endif; ?>

      <input name="submit" type="submit" value="Crear Plato" />
    </form>



  </main>

  <!--FOOTER-->
  <?php require __DIR__ . '\../parts/footer.view.php' ?>
</body>

</html>