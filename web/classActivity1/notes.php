<?php

    require_once("dbConnect.php");
    $db = get_db();

    $course_id = $_GET['course_id'];
    $query = 'SELECT id, name, course_code FROM course WHERE id=:id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $course_id, PDO::PARAM_INT);
    $statement->execute();
    $course = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $course_name = $course['name'];
        echo "<h1>Notes for" . $course['course_name'] . "-" . $course['course_code'] . "</h1>";

    ?>

    <form action="insert_note.php" method="post">
        <input type="date" name="date"><br>
        <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"><br>
        <textarea name="content"></textarea><br>
        <input type="submit" value='Insert Note'><br>
    </form>
</body>
</html>