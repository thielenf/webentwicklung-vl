<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <?php include("header.php"); ?>
    <div class="row">
        <div class="col-2">
            <?php include("navigation.php"); ?>
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

</body>
</html>