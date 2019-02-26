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
    <link rel="stylesheet" href="css/main.css">
    <title>Add Event</title>
</head>
<body>
    <header>
        <h1>Add a New Event</h1>
        <p class="homeLink"><a href="groups.php">Home</a></p>
    </header>
    <main>
        <div class="addNew">
            <div class="add1">
                <form action="dbAdd.php" method="POST">
                    FHE Group Name:
                    <select name="gId">
                        <?php
                            foreach ($groups as $group) { 
                                
                                echo '<option value=' . $group['id'] . ">" . $group['group_name'] . "</option>";
                            }
                        ?>
                    </select><br><br>
                    Activity Name:
                    <input type="text" name="aName"><br><br>
                    Activity Description:<br>
                    <textarea type="text" name="aDescription"></textarea><br><br>
                    Prayer:
                    <input type="text" name="prayer"><br><br>
                    Thought:
                    <input type="text" name="thought"><br><br>
                    Treat:
                    <input type="text" name="treat"><br><br>
                    <input type="submit" value="Add Event">
                </form>
            </div>
            <div class="add1">
                <img src="images/appointment.png" alt="appointment">
            </div>
        </div>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2019</p>
    </footer>
</body>
</html>