<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/webentwicklung-vl/codeigniter/public/css/style.css">
</head>
<body>
<div class="container-fluid">
    <?php include(APPPATH . "/Views/templates/header.php"); ?>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>

        <div class="col-8">
            <form class="mb-3">
                <div class="form-group">
                    <h4 class="">Projekt auswählen:</h4>
                    <select aria-label="Projekt auswählen" class="form-select" id="choose-project">
                        <!--Dropdown menü-->
                        <option selected>- bitte auswählen -</option>
                    </select>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">
                            Auswählen
                        </button>
                        <button class="btn btn-primary" type="submit">
                            Bearbeiten
                        </button>
                        <button class="btn btn-danger" type="submit">
                            Löschen
                        </button>
                    </div>
                </div>
            </form>
            <form class="mb-3">
                <h4 class="">Projekt bearbeiten/erstellen</h4>
                <div class="form-group">
                    <label class="form-label mb-2" for="project-name">Projektname:</label>
                    <input aria-label="Projektname" class="form-control" id="project-name" placeholder="Projekt">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="project-description">Projektbeschreibung:</label>
                    <textarea aria-label="Projektbeschreibung" class="form-control" id="project-description"
                              placeholder="Projektbeschreibung" rows="4"
                    ></textarea>
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