<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php 
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Data</th>
            <th>Keterangan</th>
        </tr>
        <?php 
        foreach ($Dosen as $key => $value) {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
