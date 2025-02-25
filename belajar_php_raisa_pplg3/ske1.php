<?php
$grades = [
    ['90', '100', 'A'],
    ['80', '89', 'B'],
    ['70', '79', 'C'],
    ['0', '69', 'D']
];

$result = "";
if (isset($_GET['nilai'])) {
    $inputNilai = $_GET['nilai'];
    if ($inputNilai < 0 || $inputNilai > 100) {
        $result = "Nilai wajib di antara 0 - 100.";
    } else {
        foreach ($grades as $grade) {
            if ($inputNilai >= $grade[0] && $inputNilai <= $grade[1]) {
                $result = "Nilai $inputNilai = $grade[2]";
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Nilai</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #E53888;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            margin-right: 10px;
        }
        input[type="time"] {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #E53888;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #E53888;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #E53888;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Penilaian Nilai</h2>
    <form method="GET">
        <label for="nilai">Masukkan Nilai: </label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Cek Nilai</button>
    </form>
    
    <p><strong><?= $result ?></strong></p>
    
    <table>
        <tr>
            <th>Range Nilai</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($grades as $grade): ?>
            <tr>
                <td><?= $grade[0] ?> - <?= $grade[1] ?></td>
                <td><?= $grade[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>