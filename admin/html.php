<?php // opening php tags

session_start();
// adding database file
require_once("Placement_portal.php");

$sql = "select * from users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['Name'];
    }
}
// closing PHP tag
?>



?> // closing php tags