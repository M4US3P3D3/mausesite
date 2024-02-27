<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frases Aleatórias</title>
</head>
<body>

<?php
// Array de frases
$frases = array(
    "A vida é feita de escolhas.",
    "O importante não é vencer todos os dias, mas lutar sempre.",
    "A persistência é o caminho do êxito.",
    "O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo.",
    "A cada obstáculo superado, a força se renova.",
);

// Escolhe uma frase aleatória
$fraseEscolhida = $frases[array_rand($frases)];
?>

<h1>Frase Aleatória:</h1>
<p><?php echo $fraseEscolhida; ?></p>

</body>
</html>