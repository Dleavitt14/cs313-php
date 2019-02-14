<?php
$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content = htmlspecialchars($_POST['content']);

require_once("dbConnect.php");
    $db = get_db();

    $query = 'INSERT INTO note (date, content, course_id) VALUES(:date, :content, :course_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date, PDO::PARAM_STR);
    $statement->bindValue(':content', $date, PDO::PARAM_STR);
    $statement->bindValue(':course_id', $date, PDO::PARAM_INT);
    $statement->execute();
    $course = $statement->fetch(PDO::FETCH_ASSOC);

header("Location:notes.php?course_id=$$course_id");
die();
?>