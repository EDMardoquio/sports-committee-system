<?php
include 'connection/db_connection.php';

$query = "SELECT item, SUM(stocks) as total FROM inventory GROUP BY item";
$result = mysqli_query($connection, $query);

$labels = [];
$values = [];

while($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['item'];
    $values[] = $row['total'];
}

echo json_encode([
    'labels' => $labels,
    'values' => $values
]);
?>