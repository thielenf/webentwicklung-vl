<div class="container-fluid">
    <header class="bg-light header container-fluid">Aufgabenplaner: ToDos</header>
    <div class="row">
        <div class="col-2">
            <?php include(APPPATH . "/Views/templates/navigation.php"); ?>
        </div>

        <div class="col-10">
            <div class="row">
                <?php
                include("todo_data.php");

                foreach (get_todo_data() as $data) {
                    echo '<div class="col"><div class="card">';
                    echo '<p class="card-header">' . $data["name"] . '</p>';
                    echo '<ul class="list-group">';
                    foreach ($data["items"] as $item) {
                        echo '<li class="list-group-item">' . $item . '</li>';
                    }
                    echo '</ul></div></div>';
                }
                ?>
            </div>
        </div>

    </div>
</div>