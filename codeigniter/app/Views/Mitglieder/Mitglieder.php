<div class="container-fluid">
    <header class="bg-light header container-fluid">Aufgabenplaner: Mitglieder</header>

    <!-- Modal -->
    <div id="confirm-delete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>
        <div class="col-8">

            <table class="table fs-smaller">
                <thead class="table-light">
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Im Projekt:</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['mitglieder'] as $item): ?>
                    <tr>
                        <td class="w-25"> <?= $item['username'] ?> </td>
                        <td> <?= $item['email'] ?> </td>
                        <td><input type="checkbox" id="imProjekt"
                                   name="checkbox1" <?= (isset($item['ismember']) && ($item['ismember']) ? "checked" : "") ?>
                            <label for="checkbox1"></label><br></td>
                        <td class="">
                            <!-- FIXME: dirty! don't use GET! -->
                            <a href="<?= base_url('/Mitglieder/delete/' . $item['id']) ?>" data-toggle="modal"
                               data-target="#confirm-delete"><i
                                        class="table-icon fa-regular fa-trash-can"></i></a>
                            <a href="<?= base_url('/Mitglieder/edit/' . $item['id']) ?>"><i
                                        class="table-icon fa-regular fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <form action="<?= base_url($data['mode'] == 0 ? '/Mitglieder/create' : '/Mitglieder/update') ?>"
                  method="post" accept-charset="utf-8">
                <legend class="">
                    <?php
                    if ($data['mode'] == 0) {
                        echo 'Erstellen';
                    } elseif ($data['mode'] == 1) {
                        echo 'Bearbeiten';
                    }
                    ?>
                </legend>
                <div class="form-group d-none">
                    <label class="form-label mb-2" for="id">ID:</label>
                    <input class="form-control" id="id" name="id"
                           value="<?= $data['item']['id'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="username">Username:</label>
                    <input aria-label="Username" class="form-control" id="username" name="username"
                           placeholder="Username" value="<?= $data['item']['username'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="email">E-Mail:</label>
                    <input aria-label="e-mail" class="form-control" id="email" name="email"
                           placeholder="email@example.com" value="<?= $data['item']['email'] ?? "" ?>">
                </div>
                <?php if (($data['mode'] == 0) || isset($data['item']['username']) && (session()->get("username") == $data['item']['username'])): ?>
                    <div class="form-group">
                        <label class="form-label mb-2" for="password">Passwort:</label>
                        <input aria-label="password" class="form-control" id="password" name="password"
                               placeholder="********" type="password">
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class="form-label mb-2" for="firstname">Vorname:</label>
                    <input aria-label="first name" class="form-control" id="firstname" name="firstname"
                           placeholder="Max" value="<?= $data['item']['firstname'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="lastname">Nachname:</label>
                    <input aria-label="last name" class="form-control" id="lastname" name="lastname"
                           placeholder="Mustermann" value="<?= $data['item']['lastname'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="street">Straße und Hausnummer:</label>
                    <input aria-label="street" class="form-control" id="street" name="street"
                           placeholder="Musterweg 1" value="<?= $data['item']['street'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="zip">PLZ:</label>
                    <input aria-label="zip code" class="form-control" id="zip" name="zip"
                           placeholder="12345" value="<?= $data['item']['zip'] ?? "" ?>">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="city">Ort:</label>
                    <input aria-label="city" class="form-control" id="city" name="city"
                           placeholder="Musterstadt" value="<?= $data['item']['city'] ?? "" ?>">
                </div>
                <?php if (!isset($data['mode']) || ($data['mode'] == 0)) : ?>
                    <button type="submit" class="btn btn-success mt-2 mb-2 mr-2">
                        Erstellen
                    </button>
                <?php endif ?>

                <?php if ($data['mode'] == 1) : ?>
                    <button type="submit" class="btn btn-success mt-2 mb-2 mr-2">
                        Speichern
                    </button>
                <?php endif ?>
            </form>
        </div>
    </div>
</div>