<?php

$pdo = db();
$sql = sqlCompleted();
$stmt = $pdo->query($sql);

?>

<table>
    <thead>
        <tr>
            <th style="text-align:left;">Bike Model</th>
            <th style="text-align:left;">Customer Name</th>
            <th style="text-align:left;">Start Time</th>
            <th style="text-align:left;">End Time</th>
            <th style="text-align:left;">Duration (min)</th>
            <th style="text-align:left;">Total Cost</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $stmt->fetch()): ?>
            <tr>
                <td><?= $row['model'] ?></td>
                <td><?= $row['customer_name'] ?></td>
                <td><?= $row['start_time'] ?></td>
                <td><?= $row['end_time'] ?></td>
                <td><?= $row['duration'] ?></td>
                <td><?= $row['total_cost'] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>