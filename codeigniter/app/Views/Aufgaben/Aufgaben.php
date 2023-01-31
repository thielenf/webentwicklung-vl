<div class="container-fluid">
    <div class="card text-center border-0 mb-3">
        <div class="text-bg-light p-5">
            <h2>Aufgabenplaner: Aufgaben</h2>
        </div>
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
                                <select class="selectpicker" multiple aria-label="Zuständige Mitglieder wählen"
                                        data-live-search="true">
                                    <?php foreach ($data['members'] as $member): ?>
                                        <option value="<?= $member['id'] ?>" <?= in_array($member['id'], $data['task_members'][$task['id']]) ? 'selected' : '' ?>><?= $member['id'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <!--?= $item['who'] ?>--> </td>
                            <td class=""><a href="<?= base_url('Aufgaben/delete/' . $task['id']) ?>"><i
                                            class="table-icon fa-regular fa-trash-can"></i></a><a
                                        href="<?= base_url('Aufgaben/edit/' . $task['id']) ?>"><i
                                            class="table-icon fa-regular fa-pen-to-square"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <form action="<?= base_url($data['mode'] == 0 ? '/Aufgaben/create' : '/Aufgaben/update') ?>" class=""
                      method="post">
                    <legend class=""><?= ($data['mode'] == 0) ? 'Erstellen' : 'Bearbeiten' ?></legend>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="title">Aufgabenbezeichnung:</label>
                        <input aria-label="Aufgabe" class="form-control" id="task_id" name="task_id"
                               placeholder="Aufgabe" value="<?= $data['item']['id'] ?? '' ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="description">Beschreibung der Aufgabe:</label>
                        <textarea aria-label="Beschreibung" class="form-control" id="description" name="description"
                                  placeholder="Beschreibung" rows="4" value="<?= $data['item']['description'] ?? '' ?>"
                        ></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="due_date">fällig bis:</label>
                        <input aria-label="fällig bis" class="form-control" id="due_date" name="due_date"
                               placeholder="01.01.19" value="<?= $data['item']['date_due'] ?? '' ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="tab">Zugehöriger Reiter:</label>
                        <select aria-label="Reiter auswählen" class="form-select" id="tab_id" name="tab_id">
                            <!--Dropdown menü-->
                            <?php foreach ($data['tabs'] as $tab): ?>
                                <option value="<?= $tab['id'] ?>" <?= isset($data['item']) && $data['item']['task_tab'] ? "selected" : "" ?>><?= $tab['id'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="tab-Zuständig">Zuständig:</label>
                        <select class="selectpicker" multiple aria-label="Zuständige Mitglieder wählen" id="member_ids"
                                name="member_ids[]"
                                data-live-search="true">
                            <?php foreach ($data['members'] as $member): ?>
                                <option value="<?= $member['id'] ?>" <?= isset($data['item']) && (in_array($data['item']['task_members'][$data['item']['id']], $member['id'])) ? 'selected' : '' ?>><?= $member['id'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">
                            <?= ($data['mode'] == 0) ? 'Erstellen' : 'Speichern' ?>
                        </button>
                        <button class="btn btn-info text-white" type="submit">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>