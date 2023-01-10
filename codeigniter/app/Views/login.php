<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <?= form_open('/Login', array('role' => 'form')) ?>
            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group pb-2">
                    <label for="username">Benutzername:</label>
                    <input type="text" class="form-control" id="username" name="username"/>
                </div>
                <div class="form-group pb-2">
                    <label for="password">Passwort:</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>
            </div>
            <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            </form>
            <p>Noch nicht registriert? <a href="" aria-label="Registrierung">Registrierung</a></p>
        </div>
    </div>
</div>