<?php
$times = [
    ['00:00', '04:00', 'Dini hari'],
    ['04:00', '10:00', 'Pagi'],
    ['10:00', '15:00', 'Siang'],
    ['15:00', '17:30', 'Sore'],
    ['17:30', '18:30', 'Petang'],
    ['18:30', '24:00', 'Malam']
];

$result = "";
if (isset($_GET['waktu'])) {
    $inputWaktu = $_GET['waktu'];
    if (strtotime($inputWaktu) < strtotime('00:00') || strtotime($inputWaktu) > strtotime('24:00')) {
        $result = "Waktu tidak valid. Harus antara 00:00 - 24:00.";
    } else {
        foreach ($times as $time) {
            if (strtotime($inputWaktu) >= strtotime($time[0]) && strtotime($inputWaktu) < strtotime($time[1])) {
                $result = "Pada jam $inputWaktu, waktu tersebut adalah: $time[2]";
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
    <title>Keterangan Waktu</title>
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
    <h2>Keterangan Waktu</h2>
    <form method="GET">
        <label for="waktu">Masukkan Waktu (HH:MM): </label>
        <input type="time" id="waktu" name="waktu" required>
        <button type="submit">Cek Waktu</button>
    </form>
    
    <p><strong><?= $result ?></strong></p>
    
    <table>
        <tr>
            <th>Waktu</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($times as $time): ?>
            <tr>
                <td><?= $time[0] ?> - <?= $time[1] ?></td>
                <td><?= $time[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>