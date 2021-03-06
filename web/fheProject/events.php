<?php

    require 'dbConnect.php';

    if (isset($_GET['group_number'])) {
        $group = $_GET['group_number'];
        $stmt = $db->prepare('SELECT * FROM events WHERE group_id=:id');
        $stmt->bindValue(':id', $group, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Events</title>
</head>
<body>
    <header>
        <h1>Events For Group</h1>
        <p class="homeLink"><a href="groups.php">Home</a></p>
    </header>
    <main>
        <div class="allGroups">
        <?php

            foreach($rows as $event) {
                $prayer = $event["prayer"];
                $thought = $event["thought"];
                $treat = $event["treat"];
                $name = $event["activity_name"];
                $description = $event["activity_description"];

                echo    '<div class="group">'.
                        '<h2>' . $name . '</h2>' . 
                        '<p>' . $description . '</p>' . 
                        '<p><strong>Prayer:</strong> ' . $prayer . '</p>' . 
                        '<p><strong>Thought:</strong> ' . $thought . '</p>' . 
                        '<p><strong>Treat:</strong> ' . $treat . '</p>'.
                        '</div>';
            }

        ?>
        </div>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2019</p>
    </footer>  
    
</body>
</html>