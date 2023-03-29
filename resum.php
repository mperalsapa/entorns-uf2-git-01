<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resum Formulari accesible</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container col-4" role="main">
        <h1>Resum Formulari Accesible</h1>
        <h2>L' enviament ha s'ha realitzat correctament.</h2>
        <h3>Adreça de correu electronic</h3>
        <p><?= $old["email"] ?></p>
        <h3>Nom</h3>
        <p><?= $old["name"] ?></p>
        <h3>Lloc web</h3>
        <p><?= $old["web"] ?></p>
        <h3>Comentari</h3>
        <p><?= $old["comment"] ?></p>
        <h3>Genere</h3>
        <p><?= $old["gender"] ?></p>
    </div>

    <!-- bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>