<?php
include 'noingresaradmi.php';
?>
<?php
session_start();
session_destroy();
echo 'cerraste sesion';
echo '<script>window.location="index.php";</script>';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Saliendo...</title>
        <meta charset="utf-8">
    </head>

    <body>
        <script language="javascript">location.href="index.php";
        </script>
    </body>

</html>
