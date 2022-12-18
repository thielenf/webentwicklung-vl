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
                <?php
                include("tab_data_aufgaben.php");
                foreach (get_tab_data() as $data) {
                    echo "<tr><td class=\"w-25\">" . $data['aufgabenbezeichnung'] . "</td>";
                    echo "<td>" . $data['description'] . "</td>";
                    echo "<td>" . $data['reiter'] . "</td>";
                    echo "<td>" . $data['who'] . "</td>";
                    echo "<td class=\"\"><a href=\"\"><i class=\"table-icon fa-regular fa-trash-can\"></i></a><a href=\"\"><i class=\"table-icon fa-regular fa-pen-to-square\"></i></a></td></tr>";
                }
                ?>
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
                    <input aria-label="Zugehöriger Reiter" class="form-control" id="tab-Zugehöriger Reiter"
                           placeholder="ToDo">
                </div>
            </form>
            <form class="mb-3">
                <div class="form-group">
                    <label class="form-label mb-2" for="tab-Zuständig">Zuständig:</label>
                    <input aria-label="Zuständig" class="form-control" id="tab-Zuständig"
                           placeholder="Max Mustermann">
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