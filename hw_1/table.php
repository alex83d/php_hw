<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            width: 100%;
            margin: 0 auto;
        }
        table,
        td {
            border: 1px solid #333;
            text-align: center
        }
        tr {
            background: dimgrey;
        }
    </style>
    <title>Table</title>
</head>
<body>
<table>

    <?php
    $table = '<th>  </th>';
    for ($i = 1; $i <= 10; $i++) {
        $table .= "<th>$i</th>";
    }

    for ($i = 1; $i <= 10; $i++) {
        $table .= "<tr><td><strong>$i</strong></td>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            if ($i % 2 == 0 && $j % 2 == 0) {
                $result = "($result)";
            } else {
                $result = "[$result]";
            }
            $table .= '<td>' . $result . '</td>';
        }
        $table .= '</tr>';
    }

    print $table;
    ?>

</table>

</body>
</html>
