<?php
// Include the connection file
include '../DBconnection/db_connection.php';

// SQL query to create wallpapers table
$table_creation_query = "CREATE TABLE IF NOT EXISTS wallpapers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query and check if table creation is successful
if ($conn->query($table_creation_query) === TRUE) {
    echo "Table 'wallpapers' created successfully, or already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close(); // Close the connection after you're done
?>
