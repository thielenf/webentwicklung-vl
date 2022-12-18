<div class="container-fluid">
    <header class="bg-light header container-fluid">Aufgabenplaner: ToDos</header>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>

        <div class="col-10">
            <div class="row">
                <?php
                foreach ($data['todos'] as $item) {
                    echo '<div class="col"><div class="card">';
                    echo '<p class="card-header">' . $item["name"] . '</p>';
                    echo '<ul class="list-group">';
                    foreach ($item["subitems"] as $list_item) {
                        echo '<li class="list-group-item">' . $list_item . '</li>';
                    }
                    echo '</ul></div></div>';
                }
                ?>
            </div>
        </div>

    </div>
</div>