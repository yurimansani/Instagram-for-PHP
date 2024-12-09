<?php
$itensTodo = [
    [
        'item' => 'Adicionar compatibilidade com Laravel',
        'done' => false,
    ],
];


foreach ($itensTodo as $item) {
    if ($item['done']) {
        echo '[x] -';
        echo $item['item'];
        echo PHP_EOL;
        continue;
    }
    echo '[ ] -';
    echo $item['item'];
    echo PHP_EOL;
}
