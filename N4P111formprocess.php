<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysql_error($db));

$reviewer = $_POST['reviewer'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];
$intRating = (int)$rating;
$date = $_POST['date'];

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (2, "$date", "$reviewer", "$comments", "$intRating")
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>
