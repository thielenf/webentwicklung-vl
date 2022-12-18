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
                    <th scope="col">Beschreibung</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include("tab_data.php");
                foreach (get_tab_data() as $data) {
                    echo "<tr><td class=\"w-25\">" . $data['name'] . "</td>";
                    echo "<td>" . $data['description'] . "</td>";
                    echo "<td class=\"\"><a href=\"\"><i class=\"table-icon fa-regular fa-trash-can\"></i></a><a href=\"\"><i class=\"table-icon fa-regular fa-pen-to-square\"></i></a></td></tr>";
                }
                ?>
                </tbody>
            </table>
            <form class="mb-3">
                <h4 class="">Reiter bearbeiten/erstellen</h4>
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-name">Bezeichnung des Reiters</label>
                    <input aria-label="Bezeichnung des Reiters" class="form-control" id="tab-name"
                           placeholder="Reiter">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-description">Beschreibung:</label>
                    <textarea aria-label="Beschreibung des Reiters" class="form-control" id="tab-description"
                              placeholder="Beschreibung des Reiters" rows="4"
                              type=""></textarea>
                </div>
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