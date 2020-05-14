<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class='navbar navabr-dark bg-primary mb-3'>
    <a href="/index.php" class="navbar-brand">Mon calendrier</a>
    </nav>

    <?php 
    require '../src/Date/Month.php'; // verifier le chemin normalement ya pas les points
    
    $month = new App\Date\Month(month: $_GET['month'] ?? null,year: $_GET['year'] ?? null);
    ?>
    <h1><?= $month->toString();?></h1>
    <table>
    </table>
</body>
</html>