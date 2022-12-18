<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/webentwicklung-vl/codeigniter/public/css/style.css">
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/8458bdbd82.js"></script>
</head>
<body>
<div class="container-fluid">
    <?php include(APPPATH . "/Views/templates/header.php"); ?>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>

        <div class="col-8">

            <table class="table fs-smaller">
                <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Im Projekt:</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['mitglieder'] as $item) {
                    echo "<tr><td class=\"w-25\">" . $item['name'] . "</td>";
                    echo "<td>" . $item['E-Mail'] . "</td>";
                    echo '<td><input type="checkbox" id="imProjekt" name="checkbox1" ' . ($item['ismember'] ? "checked" : "") . '>
                <label for="checkbox1"></label><br> </td>';
                    echo "<td class=\"\"><a href=\"\"><i class=\"table-icon fa-regular fa-trash-can\"></i></a><a href=\"\"><i class=\"table-icon fa-regular fa-pen-to-square\"></i></a></td></tr>";
                }
                ?>
                </tbody>
            </table>
            <form class="mb-3">
                <h4 class="">Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Username">Username:</label>
                    <input aria-label="Username" class="form-control" id="tab-Username"
                           placeholder="Username">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-E-Mail">E-Mail-Adresse:</label>
                    <input aria-label="E-Mail" class="form-control" id="tab-E-Mail"
                           placeholder="E-Mail-Adresse eingeben">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Passwort">Passwort:</label>
                    <input aria-label="Passwort" class="form-control" id="tab-Passwort"
                           placeholder="Passwort">
                </div>
                <input type="checkbox" id="ismember" name="checkbox3" value="Check">
                <label for="ismember"> Dem Projekt zugeordnet</label><br>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">
                        Speichern
                    </button>
                    <button class="btn btn-info text-white" type="submit">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>