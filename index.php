<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primer php</title>
  </head>
  <body>
    <header>
      <h1>Mi Primer Script en PHP</h1>
    </header>
    <nav>
      <!--  Aqui va el menú -->
    </nav>
    <section>
    <?php
    $texto="Hola Mundo, ver 2.";
    echo "<p>$texto</p>\n";
    echo '<p>'.$texto.'</p>'."\n";
    ?>
  </section>
  <footer>Derechos Reservados 2021</footer>
  </body>
</html>
