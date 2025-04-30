<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian 10x10</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ccc;
        }
    </style>
</head>
<body>

<h2>Tabel Perkalian 10 x 10</h2>

<table>
    <tr>
        <th>x</th>
        <?php
        // Header kolom 1 sampai 10
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
    // Baris 1 sampai 10
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; // Header baris

        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "<td>$i x $j = $hasil</td>"; // Isi tabel: 1 x 1 = 1
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
