<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Dynamic Multiplication Table</h1>
<table>
    <thead>
    <tr>
        <th></th>
        <?php for ($col = 1; $col <= 10; $col++): ?>
            <th><?= $col; ?></th>
        <?php endfor; ?>
    </tr>
    </thead>
    <tbody>
    <?php for ($row = 1; $row <= 10; $row++): ?>
        <tr>
            <th><?= $row; ?></th>
            <?php for ($col = 1; $col <= 10; $col++): ?>
                <td><?= $row * $col; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>
</body>
</html>
