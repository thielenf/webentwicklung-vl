<div class="container-fluid">
    <header class="bg-light header container-fluid">Aufgabenplaner: Aufgaben</header>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>

        <div class="col-8">

            <table class="table fs-smaller">
                <thead class="table-light">
                <tr>
                    <th scope="col">Aufgabenbezeichnung:</th>
                    <th scope="col">Beschreibung der Aufgabe:</th>
                    <th scope="col">Reiter:</th>
                    <th scope="col">Zuständig:</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['tasks'] as $item): ?>
                    <tr>
                        <td class="w-25"> <?= $item['aufgabenbezeichnung'] ?> </td>
                        <td> <?= $item['description'] ?> </td>
                        <td> <?= $item['reiter'] ?> </td>
                        <td>
                            <select class="selectpicker" multiple aria-label="Default select example"
                                    data-live-search="true">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                            <!--?= $item['who'] ?>--> </td>
                        <td class=""><a href=""><i class="table-icon fa-regular fa-trash-can"></i></a><a href=""><i
                                        class="table-icon fa-regular fa-pen-to-square"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <form class="mb-3">
                <h4 class="">Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-aufgabenbezeichnung">Aufgabenbezeichnung:</label>
                    <input aria-label="Aufgabe" class="form-control" id="tab-aufgabenbezeichnung"
                           placeholder="Aufgabe">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-description">Beschreibung der Aufgabe:</label>
                    <textarea aria-label="Beschreibung" class="form-control" id="tab-description"
                              placeholder="Beschreibung" rows="4"
                    ></textarea>
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Erstellungsdatum">Erstellungsdatum:</label>
                    <input aria-label="Erstellungsdatum" class="form-control" id="tab-Erstellungsdatum"
                           placeholder="01.01.19">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-fällig bis">fällig bis:</label>
                    <input aria-label="fällig bis" class="form-control" id="tab-fällig bis"
                           placeholder="01.01.19">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Zugehöriger Reiter">Zugehöriger Reiter:</label>
                    <select aria-label="Projekt auswählen" class="form-select" id="choose-project">
                        <!--Dropdown menü-->
                        <option selected> ToDo</option>
                    </select>
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Zuständig">Zuständig:</label>

                    <select aria-label="Projekt auswählen" class="form-select" id="choose-project">
                        <!--Dropdown menü-->
                        <option selected> Max Mustermann</option>
                    </select>
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