<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
    [
        'teams' => 'A|X Armani Exchange Milano - UNAHOTELS Reggio Emilia',
        'result' => '90-87'
    ],
    [
        'teams' => 'Carpegna Prosciutto Pesaro - Banco di Sardegna Sassari',
        'result' => '74-67'
    ],
    [
        'teams' => 'Virtus Segafredo Bologna - Acqua S.Bernardo Cantù',
        'result' => '94-87'
    ],
    [
        'teams' => 'Umana Reyer Venezia - Germani Brescia',
        'result' => '67-92'
    ],
    [
        'teams' => 'Virtus Roma - Fortitudo Lavoropiù Bologna',
        'result' => '90-75'
    ],
    [
        'teams' => 'De Longhi Treviso Basket - Dolomiti Energia Trentino',
        'result' => '86-87'
    ],
    [
        'teams' => 'Allianz Pallacanestro Trieste - Vanoli Basket Cremona',
        'result' => '84-80'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le parite di oggi</title>
</head>
<body>
    <ul>
    <?php
    for ($i = 0; $i < count($matches); $i++){?>
    <li>
    <span> <?php echo $matches[$i] ['teams'] ?> |</span>
    <span> <?php echo $matches[$i] ['result'] ?> </span>
    </li>
    <?php } ?>
    </ul>
</body>
</html>