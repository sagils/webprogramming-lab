<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Chess Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <h1>List of Indian Chess Players</h1>

    <?php
    $players = [
        "Viswanathan Anand",
        "Gukesh Dommaraju",
        "Rameshbabu Praggnanandhaa",
        "Pentala Harikrishna",
        "Vidit Gujrathi",
        "Koneru Humpy",
        "Vaishali Rameshbabu",
        "Adhiban Baskaran",
        "Krishnan Sasikiran",
        "Nihal Sarin"
    ];
    ?>

    <table>
        <tr>
            <th>S.No</th>
            <th>Player Name</th>
        </tr>
        <?php foreach ($players as $index => $player): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($player, ENT_QUOTES, "UTF-8") ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
