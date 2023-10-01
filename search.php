<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'collegescout');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search query from the POST data
$data = json_decode(file_get_contents('php://input'), true);
$query = $data['query'];

// SQL query to retrieve records from the database based on the query
$sql = "SELECT * FROM reg WHERE cname LIKE '%$query%'";

$result = $conn->query($sql);

// Store matching results in an array
$results = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $results[] = $row['cname'];
    }
}

// Return the results as JSON
header('Content-Type: application/json');
echo json_encode($results);

$conn->close();
?>
