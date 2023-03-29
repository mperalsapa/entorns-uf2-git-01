<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari accesible</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container col-4" role="main">
        <h1>Formulari Accesible</h1>
        <form class="col row" action="index.php" method="POST">
            * : el camp es obligatori

            <label class="form-label <?= isset($errors["email"]) ? "is-invalid" : "" ?>">
                Email*
                <input class="form-control" type="text" name="email" id="emailInput" <?= isset($old["email"]) ? "value='" . $old["email"] . "'" : "" ?><?= isset($errors["email"]) ? "autofocus" : "" ?>>
            </label>
            <?php
            if (isset($errors["email"])) {
                echo "<div class=\"invalid-feedback\">" . $errors["email"] . "</div>";
            }
            ?>

            <label class="form-label <?= isset($errors["name"]) ? "is-invalid" : "" ?>">
                Nom*
                <input class="form-control" type="text" name="name" id="nameInput" <?= isset($old["name"]) ? "value='" . $old["name"] . "'" : "" ?><?= isset($errors["name"]) ? "autofocus" : "" ?>>
            </label>
            <?php
            if (isset($errors["name"])) {
                echo "<div class=\"invalid-feedback\">" . $errors["name"] . "</div>";
            }
            ?>

            <label class="form-label <?= isset($errors["web"]) ? "is-invalid" : "" ?>">
                Lloc Web*
                <input class="form-control" type="text" name="web" id="webInput" <?= isset($old["web"]) ? "value='" . $old["web"] . "'" : "" ?><?= isset($errors["web"]) ? "autofocus" : "" ?>>
            </label>
            <?php
            if (isset($errors["web"])) {
                echo "<div class=\"invalid-feedback\">" . $errors["web"] . "</div>";
            }
            ?>

            <label class="form-label <?= isset($errors["comment"]) ? "is-invalid" : "" ?>">
                Comentari*
                <textarea class="form-control" name="comment" id="commentInput" cols="30" rows="10" <?= isset($errors["comment"]) ? "autofocus" : "" ?>><?= isset($old["comment"]) ? $old["comment"] : "" ?></textarea>
            </label>
            <?php
            if (isset($errors["comment"])) {
                echo "<div class=\"invalid-feedback\">" . $errors["comment"] . "</div>";
            }
            ?>

            <div role="radiogroup" aria-labelledby="gender-label">
                <span class="form-label <?= isset($errors["gender"]) ? "is-invalid" : "" ?>" id="gender-label">Genere*</span>
                <div class="form-check">
                    <label class="form-check-label">
                        Home
                        <input class="form-check-input" type="radio" name="gender" value="man" id="maleRadioButton" <?= isset($old["gender"]) && $old["gender"] == "man" ? "checked" : "" ?><?= isset($errors["gender"]) ? "autofocus" : "" ?>>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        Dona
                        <input class="form-check-input" type="radio" name="gender" value="woman" id="femaleRadioButton" <?= isset($old["gender"]) && $old["gender"] == "woman" ? "checked" : "" ?>>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        Altre
                        <input class="form-check-input" type="radio" name="gender" value="other" id="otherRadioButton" <?= isset($old["gender"]) && $old["gender"] == "other" ? "checked" : "" ?>>
                    </label>
                </div>
                <?php
                if (isset($errors["gender"])) {
                    echo "<div class=\"invalid-feedback\">" . $errors["gender"] . "</div>";
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary my-3">Enviar</button>
        </form>
    </div>

    <!-- bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>