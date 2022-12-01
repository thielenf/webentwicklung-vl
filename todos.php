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
    <div class="row">
        <div class="col-2">
            <?php include("navigation.php"); ?>
        </div>

        <div class="col-10">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <p class="card-header">ToDo</p>
                        <ul class="list-group">
                            <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                            <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-header">Erledigt</p>
                        <ul class="list-group">
                            <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                            <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-header">Verschoben</p>
                        <ul class="list-group">
                            <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>