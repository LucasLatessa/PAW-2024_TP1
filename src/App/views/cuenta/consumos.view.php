<!DOCTYPE html>
<html lang="es">

<head>
  <?php require __DIR__ . '\../parts/head.view.php'; ?>
  <link rel="stylesheet" href="/assets/styles/cuentas.css" />
  <link rel="stylesheet" href="/assets/styles/formularios.css">
</head>

<body>
  <!--HEADER-->
  <?php require __DIR__ . '\../parts/header.view.php' ?>

  <main>
    <h1>Gestion de consumos</h1>
    <section id="pedidos">
      <h2>Pedidos</h2>
      <ul class="pedidosList">
        <li>
          <p>Pedido 1</p>
        </li>
        <li>
          <p>Pedido 2</p>
        </li>
        <li>
          <p>Pedido 3</p>
        </li>
      </ul>
    </section>

    <section class="reportes">
      <h2>Reportes</h2>
      <ul class="reportesList">
        <li>
          <p>Reporte 1</p>
        </li>
        <li>
          <p>Reporte 2</p>
        </li>
        <li>
          <p>Reporte 3</p>
        </li>
      </ul>
    </section>
  </main>

  <!--FOOTER-->
  <?php require __DIR__ . '\../parts/footer.view.php' ?>
</body>

</html>