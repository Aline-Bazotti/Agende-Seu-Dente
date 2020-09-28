<?php
require '../Util/Metodo.php';
$metodo = new Metodo();

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Agende Seu Dente - Admin</title>
</head>
<body>
<?php include 'menuLateral.php'; ?>
<main class="page-content">
    <?php
    include 'Agenda';
    ?>
</main>
</body>

</html>
