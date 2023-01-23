<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <?= form_open('/Login', array('role' => 'form')) ?>
            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group pb-2">
                    <label for="username">Benutzername:</label>
                    <input type="text" class="form-control <?= (isset($error['username'])) ? 'is-invalid' : '' ?>" id="username"
                            name="username"/>
                    <div class="invalid-feedback">
                        <?= $error['username'] ?? '' ?>
                    </div>
                </div>
                <div class="form-group pb-2">
                    <label for="password">Passwort:</label>
                    <input type="password" class="form-control <?= (isset($error['password'])) ? 'is-invalid' : '' ?>" id="password" name="password"/>
                    <div class="invalid-feedback">
                        <?= $error['password'] ?? '' ?>
                    </div>
                </div>

            </div>
            <div class="form-check">
                <input name="AGB" class="form-check-input <?= (isset($error['AGB'])) ? 'is-invalid' : '' ?>" type="checkbox" value="1"  id="AGB-Box">
                <label class="form-check-label" for="AGB-Box">
                    AGB's akzeptieren
                </label>
                <div class="invalid-feedback">
                    <?= $error['AGB'] ?? '' ?>
                </div>
            </div>
            <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            <p>Noch nicht registriert? <a href="" aria-label="Registrierung">Registrierung</a></p>
        </div>
    </div>
</div>