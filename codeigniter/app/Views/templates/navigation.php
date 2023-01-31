<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Projekte') ?>">Projekte<span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Aktuelles Projekt
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('Projekte') ?>">Projektübersicht</a>
                    <a class="dropdown-item" href="<?= base_url('Reiter') ?>">Reiter</a>
                    <a class="dropdown-item" href="<?= base_url('Aufgaben') ?>">Aufgaben</a>
                    <a class="dropdown-item" href="<?= base_url('Mitglieder') ?>">Mitglieder</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="p-4"></div>