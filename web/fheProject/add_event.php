<?php
    require 'dbConnect.php';

    $groups = $db->query('SELECT * FROM groups;');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event</title>
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Add a New Event</h1>
        <form action="dbAdd.php" method="POST">
            FHE Group Name:
            <select name="gId">
                <?php
                    foreach ($groups as $group) { 
                        
                        echo '<option value=' . $group['id'] . ">" . $group['group_name'] . "</option>";
                    }
                ?>
            </select><br>
            Activity Name:
            <input type="text" name="aName"><br>
            Activity Description:
            <textarea type="text" name="aDescription"></textarea><br>
            Prayer:
            <input type="text" name="prayer"><br>
            Thought:
            <input type="text" name="thought"><br>
            Treat:
            <input type="text" name="treat"><br>
            <input type="submit" value="Add Event">
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>