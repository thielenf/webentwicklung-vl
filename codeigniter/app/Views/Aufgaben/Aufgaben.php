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
                <?php foreach ($data['tasks'] as $task): ?>
                    <tr>
                        <td class="w-25"> <?= $task['id'] ?> </td>
                        <td> <?= $task['description'] ?> </td>
                        <td> <?= $data['task_tabs'][$task['id']] ?> </td>
                        <td>
                            <select class="selectpicker" multiple aria-label="Default select example"
                                    data-live-search="true">
                                <?php foreach ($data['members'] as $member): ?>
                                    <option value="<?= $member['id'] ?>" <?= in_array($member['id'], $data['task_members'][$task['id']]) ? 'selected' : '' ?>><?= $member['id'] ?></option>
                                <?php endforeach; ?>

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