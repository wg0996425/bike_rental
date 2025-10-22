<?php

$pdo = db();
$sql = sqlAvailableBikes();
$stmt = $pdo->query($sql);

?>

<table>
    <thead>
        <tr>
            <th style="text-align:left;">ID</th>
            <th style="text-align:left;">Model</th>
            <th style="text-align:left;">Type</th>
            <th style="text-align:left;">Hourly Rate</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $stmt->fetch()): ?>
            <tr>
                <td><?= $row['bike_id'] ?></td>
                <td><?= $row['model'] ?></td>
                <td><?= $row['type'] ?></td>
                <td><?= $row['hourly_rate'] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>