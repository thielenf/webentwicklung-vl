<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <?php include("header.php"); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="email">E-Mail Adresse</label>
                    <input class="form-control" id="email" placeholder="E-Mail Adresse eingeben" aria-label="E-Mail"
                           type="email">
                    <label for="password">Passwort</label>
                    <input class="form-control" id="password" placeholder="Passwort" aria-label="Passwort"
                           type="password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="agb" type="checkbox" value=""
                           aria-label="AGB und Datenschutzbedingungen akzeptieren">
                    <label class="form-check-label"
                           for="agb">AGBs und Datenschutzbedingungen akzeptieren</label>
                </div>
                <button class="btn btn-primary mt-2" type="submit">
                    Einloggen
                </button>
                <p>Noch nicht registriert? <a href="" aria-label="Registrierung">Registrierung</a></p>
                <p>Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="todos.php">Überspringen</a></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>