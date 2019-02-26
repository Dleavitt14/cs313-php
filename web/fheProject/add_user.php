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
    <title>Add User</title>
</head>
<body>
    <header>
        <h1>Add a New User</h1>
        <p class="homeLink"><a href="groups.php">Home</a></p>
    </header>
    <main>  
        <div class="user">
        <div class="add">
            <h2>Fill out User Information</h2>
            <form action="dbAdd.php" method="POST">
                First Name:
                <input type="text" name="fName"><br>
                Last Name:
                <input type="text" name="lName"><br>
                FHE Group Name:
                <select name="gId">
                    <?php
                        foreach ($groups as $group) { 
                            
                            echo '<option value=' . $group['id'] . ">" . $group['group_name'] . "</option>";
                        }
                    ?>
                </select><br>
                Birthday:
                <input type="text" name="birthday"><br>
                Favorite Color:
                <input type="text" name="color"><br>
                Hometown:
                <input type="text" name="hometown"><br>
                Group Leader:
                <input type="radio" name="gLeader" value="True">True<br>
                <input type="radio" name="gLeader" value="False">False<br>
                Favorite Hobby:
                <input type="text" name="hobby"><br>
                Relationship Status:
                <input type="radio" name="single" value="True">Single<br>
                <input type="radio" name="single" value="False">Other<br>
                Major:
                <input type="text" name="major"><br>
                Semester in School:
                <input type="number" name="semester" min="1" max="10"><br>
                Photo:
                <input type="text" name="photo"><br>
                <input class="button" type="submit" value="Add User">
            </form>
        </div>
        <div>
            <img src="images/user.png" alt="userIcon">
        </div>
        </div>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2019</p>
    </footer>
</body>
</html>