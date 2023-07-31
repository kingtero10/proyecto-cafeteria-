<?php
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $contrasena = $_POST['contrasena'];

  // Aqu í puedes realizar validaciones y comprobar la información recibida

  // Por ejemplo, comprobar si el nombre y la contraseña son correctos
  if ($nombre === 'usuario' && $contrasena === 'contrasena') {
    // Iniciar sesión, redireccionar a otra página, etc.
    echo "¡Bienvenido, $nombre!";
  } else {
    echo "Nombre de usuario o contraseña incorrectos";
  }
}
?>